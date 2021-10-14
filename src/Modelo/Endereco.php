<?php
namespace Alura\Banco\Modelo;
//classe Edereço

/** //o que escrevemos aqui vai nos ajudar na hora de chamar o método __get que retorna o nome de cada propriedade do objeto instanciado
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $cidade //indica que são propriedades apenas de leitura
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 */

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

    //método mágico, padrão do php, que devolve uma string
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    //método mágico do php que vai permitir que acessemos as propriedades da Classe diretamente da chamada do bjeto, sem precisar usar o método recupera que criamos
    public function __get(string $nomeDoAtributo)
    {
        //queremos pegar o que foi passado: $umEndereco->rua, e fazer com que o php devolva o valor $umEndereco->retornaRua()
        //concatenamos 'retorna' com $nomeDoAtributo, upercasefisrt, vai devolver a primeira letra como maiúscula
        $metodo = 'retorna' . ucfirst($nomeDoAtributo);
        return $this->$metodo();
    }

    //usando o método mágico __set para alterar o valor de uma propriedade
    public function __set(string $nomeDoAtributo, string $valor): void
    {
        $this->$nomeDoAtributo = $valor;
    }
}