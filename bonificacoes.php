<?php

require_once 'autoload.php';

use phpoo\Banco\Service\ControladorDeBonificacoes;
use phpoo\Banco\Modelo\CPF;
use phpoo\Banco\Modelo\Funcionario\{Diretor, Gerente, Desenvolvedor};

$funcionario = new Desenvolvedor(
    'Diego Teste',
    new CPF('123.456.789-10'),
    'Desenvolvedor',
    4000
);

$funcionario->sobeDeNivel();

$diretor = new Diretor(
    'Teste',
    new CPF('123.951.789-11'),
    'Diretor',
    8000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($diretor);

echo $controlador->recuperaTotal();
