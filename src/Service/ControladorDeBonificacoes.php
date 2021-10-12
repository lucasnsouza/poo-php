<?php
//essa é uma classe de serviço
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

//nova classe para controlar o sistema de bonificações da empresa
//essa classe vai calcular o quanto a empresa gasta com bonificações
class ControladorDeBonificacoes
{
    //o total inicia em 0 e vai recebendo os valores de cada funcionário
    private float $totalBonificacoes = 0;

    public function adicionaBonificacaoDe(Funcionario $funcionario): void
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function recuperaTotal(): float
    {
        return $this->totalBonificacoes;
    }
}