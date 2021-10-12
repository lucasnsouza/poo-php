<?php
//arquivo de testes para o sitema de bonificações
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Pessoa, Funcionario};

require_once 'autoload.php';

$umFuncionario = new Funcionario(
    'Lucas Souza', 
    new Cpf('462.852.439-00'), 
    'Programador', 
    900);

$umaFuncionaria = new Funcionario(
    'Ana Clara', 
    new Cpf('763.025.450-12'), 
    'Gerente', 
    2000);

$controlador = new ControladorDeBonificacoes();    
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal() . PHP_EOL;