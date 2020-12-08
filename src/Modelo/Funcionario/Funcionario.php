<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $nome): void
    {
        $this->validaNome($nome);
        $this->nome = $nome;
    }

    public function recuperaSalario(): float
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao(): float;
}