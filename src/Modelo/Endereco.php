<?php
namespace Alura\Banco\Modelo;

use Alura\Banco\Modelo\AcessoPropriedades;

//classe Edereço

/** //o que escrevemos aqui vai nos ajudar na hora de chamar o método __get que retorna o nome de cada propriedade do objeto instanciado
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade //indica que são propriedades apenas de leitura
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */


//final indica que essa classe não pode ser extendida
final class Endereco 
{
    //definindo que vou usar o código de uma trait
    use AcessoPropriedades;

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

    //método mágico, padrão do php, que devolve uma string
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    //usando o método mágico __set para alterar o valor de uma propriedade
    public function __set(string $nomeDoAtributo, string $valor): void
    {
        $this->$nomeDoAtributo = $valor;
    }
}