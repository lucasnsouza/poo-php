<?php
//funcionário específico, classe filha de Funcionario
//classe filha herda os métodos da classe pai, mas também pode adicionar novos métodos
namespace Alura\Banco\Modelo\Funcionario;

class Desenvolvedor extends Funcionario
{
    //método promoção de nível de desenvolvedor
    //a classe filha herda métodos, mas também pode ter métodos exclusivos
    public function sobeDeNivel(): void
    {
        $this->recebeAumento($this->retornaSalario() * 0.75);
    }

    //bonificação espescífca para os desenvolvedores
    public function calculaBonificacao(): float
    {
        return 500;
    }
}