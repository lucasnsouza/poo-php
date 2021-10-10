<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

//criando uma nova classe para contas poupança
class ContaPoupanca extends Conta
{
    //método de saque da conta pupança, a tarifa tem valor diferente
    public function sacar(float $valorASacar): void //Void indica a ausência de retorno.
    {
        $tarifaDeSaque = $valorASacar * 0.03; //definindo tarifa de saque de 5%
        $valorFinal = $valorASacar + $tarifaDeSaque;
        if ($valorFinal > $this->saldo) {
            echo "Saldo indisponível." . PHP_EOL;
            return;
        }  

        $this->saldo -= $valorFinal;
        echo "Você sacou R$$valorASacar da Poupança. Seu saldo agora é de R$$this->saldo."  . PHP_EOL;
    }
}