<?php

namespace phpoo\Banco\Modelo;

interface Autenticacao
{
    public function podeAutenticar(string $senha): bool;
}