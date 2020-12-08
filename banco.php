<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Endereco;

$endereco = new Endereco('Cidade', 'bairro', 'rua', 'numero');
$joao = new Titular(new Cpf('123.456.789-00'), 'João', $endereco);
$contaUm = new Conta($joao);
$contaUm->deposita(100);
$contaUm->saca(10);

echo $contaUm->recuperaSaldo();

$maria = new Titular(new Cpf('123.456.789-55'), 'Maria', $endereco );
$contaDois = new Conta($maria);
unset($contaDois);
echo Conta::recuperaNumeroDeContas();