<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;
//classe funcionário
class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, string $cargo, float $salario)
    {
        parent::__construct($nome, $cpf);//estou chamando o cosntrutor da classe pai, Pessoa
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    //implementando getter
    public function retornaCargo(): string
    {
        return $this->cargo;
    }

    //implementando setter que permite funcionário alterar nome
    public function defineNovoNome(string $nome): void
    {
        $this->validarNomedaPessoa($nome);
        $this->nome = $nome;
    }

    //método getter para retronar o valor de salario
    public function retornaSalario(): float
    {
        return $this->salario;
    }

    //método de bonificação dos funcinários
    public function calculaBonificacao(): float
    {
        //bonificação de 10% em cima do salário
        return $this->salario * 0.01;
    }
}