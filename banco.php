<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$joao = new Titular(new Cpf('123.456.789-00'), 'João');
$contaUm = new Conta($joao);
$contaUm->deposita(100);
$contaUm->saca(10);

echo $contaUm->recuperaSaldo();

$maria = new Titular(new Cpf('123.456.789-55'), 'Maria');
$contaDois = new Conta($maria);
unset($contaDois);
echo Conta::recuperaNumeroDeContas();