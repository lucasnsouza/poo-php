<?php
//classe para atenticar login
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel, string $senha): void
    {
       if ($autenticavel->podeAutenticar($senha)){
           echo "Usuário logado no sistema.";
       } else {
           echo "Senha incorreta.";
       }
    }
}