<?php
namespace Alura\Banco\Modelo;
//criando uma classe específica para o cpf
//final indica que essa classe não pode ser extendida
final class Cpf
{
    private string $cpf;

    public function __construct($cpf)
    {
        $this->validaCpf($cpf);
        $this->cpf = $cpf;
    }

    public function validaCpf($cpf):void
    {
        if (strlen($cpf) !== 14) {
            echo "O CPF precisa conter 11 dígitos. Certifique-se que você inseriu os números, pontos e o hífen corretamente.";
            exit();
        }
    }

    public function retornaCpf():string
    {
        return $this->cpf;
    }
}