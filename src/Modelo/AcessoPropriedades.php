<?php
namespace Alura\Banco\Modelo;
//vamos usar Traits
//Traits é o jeito do PHP de nos permitir reutilizar códigos específicos sem usar Herança ou copiar e colar código
trait AcessoPropriedades
{
    //método mágico do php que vai permitir que acessemos as propriedades da Classe diretamente da chamada do objeto, sem precisar usar o método recupera que criamos
    public function __get(string $nomeDoAtributo)
    {
        //queremos pegar o que foi passado: $umEndereco->rua, e fazer com que o php devolva o valor $umEndereco->retornaRua()
        //concatenamos 'retorna' com $nomeDoAtributo, upercasefisrt, vai devolver a primeira letra como maiúscula
        $metodo = 'retorna' . ucfirst($nomeDoAtributo);
        return $this->$metodo();
    }
}