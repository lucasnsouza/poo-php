<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\Cpf;
//criando uma classe genérica pessoa, que vai ser estendida por classes mais específicas como Titular e Funcinário
class Pessoa
{
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNomedaPessoa($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    //getters
    public function retornaNome(): string
    {
        return $this->nome;
    }

    public function retornaCpfDaPessoa(): string
    {
        return $this->cpf->retornaCpf();//método presente na classe Cpf
    }

    //método para validar nome, embora os métodos no geral sejam públicos, esse método só importará na criação da conta, não precisa ficar acessível para o usuário depois
    public function validarNomedaPessoa(string $nome):void
    {
        if (strlen($nome) < 5) {//verifica se o nme inserido tem menos de 5 carcteres
            echo "Você precisa inserir um nome com pelo menos 5  carcteres ou nome e sobrenome.";
            exit();//se a condição for true, exibe a mensagem e para execução do código
        }
    }
}