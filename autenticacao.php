<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

 $autenticador = new Autenticador();
 $umDiretor = new Diretor(
     'Paula', 
     new Cpf('432.869.012-02'), 
     3500
);

$autenticador->tentaLogin($umDiretor, '1234');