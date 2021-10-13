<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Autenticavel;

require_once 'autoload.php';

 $autenticador = new Autenticador();
 $umDiretor = new Diretor(
     'Paula', 
     new Cpf('432.869.012-02'), 
     3500
);

$novoTitular = new Titular (
    new Cpf('453.780.014-12'), 
    'Hélio Silva', 
    new Endereco(
        'Bauru', 
        'Centro', 
        'Uma Rua', 
        '142'
    )
);

$umGerente = new Gerente('Marcela', new Cpf('202.456.301-78'), 4200);

echo $autenticador->tentaLogin($umDiretor, '1234') . PHP_EOL;
echo $autenticador->tentaLogin($novoTitular, '1234') . PHP_EOL;
echo $autenticador->tentaLogin($umGerente, '4321') . PHP_EOL;