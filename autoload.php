<?php
//função do php para carregar de forma automática os arquivos das classes
spl_autoload_register(function(string $nomeCompletoDaClasse)
{
    //Alura\Banco\Modelo\Cpf -> queremos transromar o namespace no caminho do arquivo
    //src\Modelo\Cpf.php -> caminho do arquivo
    $caminhoDoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);//define que no nome da classe encontrada, a parte 'Alura\\Banco' vai ser substituida por 'src'
    $caminhoDoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoDoArquivo);//cada sistema varia o uso de '/' ou '\', para não ter esse problema, o método padrão do php 'DIRECTORY_SEPARATOR' vai substiutir pelo separador da máquina que está rodando o código
    $caminhoDoArquivo .= '.php'; //concatena o final do nome da classe com '.php' pra definir que é um arquivo

    if (file_exists($caminhoDoArquivo)){
        require_once $caminhoDoArquivo;
    }
});