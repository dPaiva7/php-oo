<?php

require_once 'autoload.php';

use phpoo\Banco\Modelo\Conta\ContaPoupanca;
use phpoo\Banco\Modelo\Conta\Titular;
use phpoo\Banco\Modelo\Endereco;
use phpoo\Banco\Modelo\CPF;


$endereco = new Endereco('João Pessoa', 'Teste', 'Rua Teste', '123');
$nomeConta = new Titular(new CPF('123.456.789-10'), 'Diego Paiva', $endereco);
$primeiraConta = new ContaPoupanca($nomeConta);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

