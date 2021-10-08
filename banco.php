<?php
//fazemos apenas a requisição de um arquivo, o arquivo que vai fazer o carregamento automático (autoloader) das classes
require_once 'autoload.php';

//usando classes de outros namespaces
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Funcionario;

$lucasCpf = new Cpf('236.459.712-89');
$lucasEndereco = new Endereco('Tonantins', 'Manacá', 'Antônio Morango', 's/n');
$lucas = new Titular($lucasCpf, 'Lucas Souza', $lucasEndereco);
$primeiraConta = new Conta($lucas);
var_dump($primeiraConta);//exibe as infromações do objeto

$primeiraConta->depositar(500);

$primeiraConta->sacar(100);//isso é ok, usando o método, porque mesmo que o valor infromado seja maior do que o saldo, o método já vai avisar que não é possível realizar operação

//chamando método para acessar saldo
echo $primeiraConta->retornarSaldo() . PHP_EOL;

//definir cpf
echo $primeiraConta->retornaCpfTitular() . PHP_EOL;

//definir nome
echo $primeiraConta->retornaNomeTitular() . PHP_EOL;

//criando uma segunda conta
$anaJuliaEndereco = new Endereco('São Paulo', 'Limoeiro', 'Limoeiro', '25');
$anaJulia = new Titular(new Cpf('486.279.025-63'), 'Ana Julia', $anaJuliaEndereco);
$segundaConta = new Conta($anaJulia);
var_dump($segundaConta);

//crinado conta para verificar validação do nome do titular
$enderecoGenerico = new Endereco('Metropolis', 'Centro', '9 de Julho', '330');
$terceiraConta = new Conta(new Titular(new Cpf('951.147.852-65'),'Eli Silva', $enderecoGenerico));

$helenaClara = new Titular(new Cpf('258.147.483-20'), 'Helena Clara', $enderecoGenerico);
$terceiraConta = new Conta($helenaClara);//note que eu estou criando uma nova instância de Conta, mas com um aváriavel já utilizada. Isso faz com que a instância acima fique sem referência na memória. Por padrão p php vai excluir a instância acima. Com isso o método  destrutor vai ser chamado. No nosso caso, embora o código mostre 4 contas criadas, o contador vai mostrar 3, já que a conta acima foi excluída memória.

echo Conta::retornarNumeroDeContas() . PHP_EOL;

$umFuncionario = new Funcionario('Maria Eduarda', new Cpf('123.456.789-10'), 'Programador');
$umFuncionario->defineNovoNome('Maria Santos');
var_dump($umFuncionario);