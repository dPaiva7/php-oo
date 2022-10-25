<?php

use phpoo\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use phpoo\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaPoupanca(
    new Titular(
        new CPF('123.456.789-10'),
        'Diego Teste',
        new Endereco('João Pessoa', 'Teste', 'Teste', '123')
    )
);
$conta->deposita(123);
$conta->saca(100);

echo $conta->recuperaSaldo() . PHP_EOL;

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF('987.654.321-10'),
        'Teste',
        new Endereco('Recife', 'Centro', 'Rua Teste', '321')
    )
);

$contaCorrente->deposita(800);
$contaCorrente->saca(500);

echo $contaCorrente->recuperaSaldo() . PHP_EOL;
echo $contaCorrente->recuperaNomeTitular();

