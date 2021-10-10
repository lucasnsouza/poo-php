<?php
namespace Alura\Banco\Modelo\Conta; //é possível separar nossas classes em namespaces, assim como separamos arquivos em pastas;
use Alura\Banco\Modelo\Conta\Titular;
//arquivo padrão para criação de contas

class Conta 
{//por convenção as propriedades devem ser sempre privadas
    private Titular $titular; //recebe uma isntância da classe titular como parâmetro
    protected float $saldo;// private define que os valores de saldo só podem ser acessados através dos métodos
    private static $numeroDeContasCriadas = 0; //membro estático que inicia com 0, e cada novo objeto criado incrmenta um

    //método construtor é executado quando a instância de conta passa a existir, e daí inicializa essa instância
    public function __construct($titular)
    {
        $this->titular = $titular;
        $this->saldo = 0; //definindo que todo objeto do tipo Conta criado vai iniciar com saldo 0

        self::$numeroDeContasCriadas++;
    }

    //método destrutor que vai ser executado quando as instâncias de conta deixam de existir
    public function __destruct()
    {
        self::$numeroDeContasCriadas--;//quando o php excluir alguma conta inútil no código, o contador perde 1
    } 


    //método de saque
    public function sacar(float $valorASacar): void //Void indica a ausência de retorno.
    {
        $tarifaDeSaque = $valorASacar * $this->percentualTarifaDeSaque(); //definindo tarifa de saque com um método
        $valorFinal = $valorASacar + $tarifaDeSaque;
        if ($valorFinal > $this->saldo) {
            echo "Saldo indisponível." . PHP_EOL;
            return;
        }  

        $this->saldo -= $valorFinal;
        echo "Você sacou R$$valorASacar. Seu saldo agora é de R$$this->saldo."  . PHP_EOL;
    }


    //método de depósito
    public function depositar(float $valorADepositar): void //Void indica a ausência de retorno.
    {
        if ($valorADepositar < 0) {
            echo "Você precisa adicionar um valor positivo."  . PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
        echo "Seu depósito de R$$valorADepositar foi processado. Seu saldo agora é de R$$this->saldo."  . PHP_EOL;
    }

    //método para buscar cpf
    public function retornaCpfTitular():string
    {
        return $this->titular->retornaCpfDoTitular();
    }

    //método para buscar nome
    public function retornaNomeTitular():string
    {
        return $this->titular->retornaNomeDoTitular();
    }

    //método para retornar o saldo, getters
    public function retornarSaldo(): float
    {
        return $this->saldo;
    }

    //método estático para recuperar o número de contas
    public static function retornarNumeroDeContas():int
    {
        return self::$numeroDeContasCriadas;
    }

    //criando um método que retorna uma tarifa de saque
    protected function percentualTarifaDeSaque(): float
    {
        return 0.05;
    }
}