<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->validaNomeTitular($nome);
        $this->endereco = $endereco;
    }

    public function recuperaCpf(): string
    {
        return $this->cpf->recuperaNumero();
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}