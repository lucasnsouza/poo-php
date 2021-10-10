<?php
//vamos criar uma tarifa de saque
use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$novaConta = new ContaCorrente(
    new Titular(
        new Cpf('623.478.208-10'), 'Ana Clara', new Endereco('Gotham', 'Narrows', 'Docas', '1035')
    )
);

$novaConta->depositar(789);
$novaConta->sacar(200);

echo $novaConta->retornarSaldo();