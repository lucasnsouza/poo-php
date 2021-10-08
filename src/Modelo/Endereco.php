<?php
namespace Alura\Banco\Modelo;
//classe Edereço
class Endereco 
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;//usamos string para números em que não precisamos realizar cálculos

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    //a seguir os getters de cada propriedade
    public function retornaCidade(): string
    {
        return $this->cidade;
    }

    public function retornaBairro(): string
    {
        return $this->bairro;
    }

    public function retornaRua(): string
    {
        return $this->rua;
    }

    public function retornaNumero(): string
    {
        return $this->numero;
    }
}