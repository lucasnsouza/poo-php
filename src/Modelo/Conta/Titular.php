<?php
namespace Alura\Banco\Modelo\Conta;

//usar classe Pessoa, que está em outro namespace
use Alura\Banco\Modelo\{Autenticavel, Pessoa, Endereco};
use Alura\Banco\Modelo\Cpf;

//vamos criar uma classe específica para definir o titular, cada classe deve ter um arquivo separado
//a classe Titular herda as propriedades da Classe Pessoa
class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);//estou chamando o cosntrutor da classe pai, Pessoa
        $this->endereco = $endereco;
    }

    //método getter para recuperar endereço
    public function retornaEndereco(): Endereco
    {
        return $this->endereco;
    }

    //getter do cpf
    public function retornaCpfDoTitular():string
    {
        return $this->retornaCpfDaPessoa();
    }

    //getter do nome
    public function retornaNomeDoTitular():string
    {
        return $this->retornaNome();
    }

    //implementando método definido como obrigatório pela interface
    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}