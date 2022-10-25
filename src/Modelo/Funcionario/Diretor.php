<?php

namespace phpoo\Banco\Modelo\Funcionario;

use phpoo\Banco\Modelo\Autenticacao;

class Diretor extends Funcionario implements Autenticacao
{
    public function calculaBonificacao(): float
    {
        return $this->recuperaSalario() * 2;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === '1234';
    }
}