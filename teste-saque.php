<?php
//vamos criar uma tarifa de saque
use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Conta\ContaPoupanca\ContaPoupanca as ContaPoupancaContaPoupanca;

require_once 'autoload.php';

$novaConta = new ContaPoupanca(
    new Titular(
        new Cpf('623.478.208-10'), 'Ana Clara', new Endereco('Gotham', 'Narrows', 'Docas', '1035')
    )
);

$novaConta->depositar(789);
$novaConta->sacar(200);

echo $novaConta->retornarSaldo();