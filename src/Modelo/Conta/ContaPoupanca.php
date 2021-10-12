<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Conta\Conta;

//criando uma nova classe para contas poupança
class ContaPoupanca extends Conta
{
    //método de saque da conta poupança deve obrigatoriamente ser implementado
    //não precisamos escrever outro método, usamos o método da classe pai, sobreescrevemos
    protected function percentualTarifaDeSaque():float
    {
        return 0.03;
    }
}