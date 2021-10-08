<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;
//classe funcionário
class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, Cpf $cpf, string $cargo)
    {
        parent::__construct($nome, $cpf);//estou chamando o cosntrutor da classe pai, Pessoa
        $this->cargo = $cargo;
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
}