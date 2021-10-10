<?php
//vamos criar uma tarifa de saque
use Alura\Banco\Modelo\Conta\{Conta, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

require_once 'autoload.php';

$novaConta = new Conta(
    new Titular(
        new Cpf('623.478.208-10'), 'Ana Clara', new Endereco('Gotham', 'Narrows', 'Docas', '1035')
    )
);

var_dump($novaConta);