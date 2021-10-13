<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
    //método de autenticação, deve funcionar para diretor, gerente e titulares de conta
    public function podeAutenticar(string $senha): bool;

}