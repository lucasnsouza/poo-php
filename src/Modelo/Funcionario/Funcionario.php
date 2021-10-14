<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Cpf, Pessoa};

//classe funcionário
abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);//estou chamando o cosntrutor da classe pai, Pessoa
        $this->salario = $salario;
    }

    //implementando setter que permite funcionário alterar nome
    public function defineNovoNome(string $nome): void
    {
        $this->validarNomeDaPessoa($nome);
        $this->nome = $nome;
    }

    //método para definir aumento de salários
    public function recebeAumento(float $valorAumento): void
    {
        if ($valorAumento < 0){//impede decréscimo de salários
            echo "Aumento deve ser positivo.";
            return;
        }

        $this->salario += $valorAumento;
    }

    //método getter para retronar o valor de salario
    public function retornaSalario(): float
    {
        return $this->salario;
    }

    //método abstrato de bonificação dos funcinários gerais da empresa
    //método abstrato vai exigir que as classes filhas declarem o método
    abstract public function calculaBonificacao(): float;
}