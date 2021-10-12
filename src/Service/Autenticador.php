<?php
//classe para atenticar login
namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Diretor;

class Autenticador
{
    public function tentaLogin(Diretor $diretor, string $senha): void
    {
       if ($diretor->podeAutenticar($senha)){
           echo "Usuário logado no sistema.";
       } else {
           echo "Senha incorreta.";
       }
    }
}