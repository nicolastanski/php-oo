<?php

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$umDiretor = new Gerente('Antonio', new Cpf('123.456.789-00'), 10000);

$autenticador = new Autenticador();
echo $autenticador->tentaLogin($umDiretor, '9876');