<?php
//classe filha de Funcionario, como uma especificção de cargo e bônus
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Autenticavel;

class Gerente extends Funcionario implements Autenticavel
{
    //método de bonificação do gerente
    public function calculaBonificacao(): float
    {
        //bonificação de um salário ineteiro
        return $this->retornaSalario();
    }

    //implementando método obrigatório da interface
    //método de autenticação
    public function podeAutenticar(string $senha): bool
    {
        return $senha === '4321';
    }
}