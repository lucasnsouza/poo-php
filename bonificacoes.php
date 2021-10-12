<?php
//arquivo de testes para o sitema de bonificações
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Pessoa};
use Alura\Banco\Modelo\Funcionario\{Funcionario,Desenvolvedor, Diretor, Gerente};

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Lucas Souza', 
    new Cpf('462.852.439-00'), 
    'Programador', 
    900);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Clara', 
    new Cpf('763.025.450-12'), 
    'Gerente', 
    2000);

$umDiretor = new Diretor('Helena', new Cpf('432.049.145-40'), 'Diretor', 3285);

$controlador = new ControladorDeBonificacoes();    
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);

echo $controlador->recuperaTotal() . PHP_EOL;