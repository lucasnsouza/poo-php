<?php
//classe filha de Funcionario, como uma especificção de cargo e bônus
namespace Alura\Banco\Modelo\Funcionario;

class Gerente extends Funcionario
{
    //método de bonificação do gerente
    public function calculaBonificacao(): float
    {
        //bonificação de um salário ineteiro
        return $this->retornaSalario();
    }
}