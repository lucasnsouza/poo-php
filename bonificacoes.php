<?php
//arquivo de testes para o sitema de bonificações
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Pessoa, Funcionario};

require_once 'autoload.php';

$umFuncionário = new Funcionario('Lucas Souza', new Cpf('462.852.439-00'), 'Programador', 900);