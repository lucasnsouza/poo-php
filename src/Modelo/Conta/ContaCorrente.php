<?php
namespace Alura\Banco\Modelo\Conta;
//criando Conta Corrente
class ContaCorrente extends Conta
{
    protected function percentualTarifaDeSaque(): float
    {
        return 0.05;
    }

    
    //método de trasnferência entre em contas
    public function transferir(float $valorAtransferir, Conta $contaDeDestino): void
    {
        if ($valorAtransferir > $this->saldo) {
            echo "Você não têm saldo para fazer essa transferência."  . PHP_EOL;
            return;
        }

        $this->sacar($valorAtransferir);
        $contaDeDestino->depositar($valorAtransferir);
        echo "Você transferiu R$$valorAtransferir. Seu saldo agora é de R$$this->saldo."  . PHP_EOL; 
    }
}