<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Cidade', 'S', 'Rua A', '123');
$endereco2 = new Endereco('São Paulo', 'Bairro', 'Rua Tietê', '1200');

echo $endereco->rua;

echo $endereco . PHP_EOL;
echo $endereco2;