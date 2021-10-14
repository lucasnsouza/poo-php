<?php
//queremos exibir em forma de relatório os objetos de endereços instaciados pela Classe Endereco

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('São Paulo', 'Limoeiro', 'Rua do Limoeiro', '25');
$outroEndereco = new Endereco('Duartina', 'Vila', 'Avenida da Cidade', '459');

/* método trabalhoso e confuso para exibir string
 echo $umEndereco->retornaRua() . ", " . $umEndereco->retornaNumero() . ", " . $umEndereco->retornaBairro() . ", " . $umEndereco->retornaCidade();
*/

//método mágico do php __toString implementado na escrita da Classe Endereco vai permitir retornar o endereço como string simplesmente chamando o nome do objeto
echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;

//o método __get nos permite acessar diretamente propriedades privadas ou que ainda não existem
echo $umEndereco->rua . PHP_EOL;
echo $outroEndereco->bairro . PHP_EOL;

//usando o método mágico para alterar o valor de uma propriedade de Endereco
$outroEndereco->cidade = 'Bauru';
echo $outroEndereco . PHP_EOL;