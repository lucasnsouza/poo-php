<?php
//classe filha de Funcionario, como uma especificção de cargo e bônus
namespace Alura\Banco\Modelo\Funcionario;

class Diretor extends Funcionario
{
    //método de bonificação do CEO
    public function calculaBonificacao(): float
    {
        //bonificação de 2x o salário
        return $this->retornaSalario() * 2;
    }

    //método de autenticação, senha, do diretor
    public function podeAutenticar(string $senha): bool
    {
        //o retorno abixao só vai acontecer se o parâmetro for true
        return $senha === '1234';
    }
}