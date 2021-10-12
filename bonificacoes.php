<?php
//arquivo de testes para o sitema de bonificações
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf, Pessoa};
use Alura\Banco\Modelo\Funcionario\{Funcionario,Desenvolvedor, Diretor, EditorDeVideo, Gerente};

require_once 'autoload.php';

$umFuncionario = new Desenvolvedor(
    'Lucas Souza', 
    new Cpf('462.852.439-00'),
    900);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Ana Clara', 
    new Cpf('763.025.450-12'), 
    2000);

$umDiretor = new Diretor('Helena', new Cpf('432.049.145-40'), 3285);

$umEditor = new EditorDeVideo('Henrique', new Cpf('345.987.423-87'), 1100);

$controlador = new ControladorDeBonificacoes();    
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal() . PHP_EOL;