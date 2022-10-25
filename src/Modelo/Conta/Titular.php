<?php

namespace phpoo\Banco\Modelo\Conta;

use phpoo\Banco\Modelo\Pessoa;
use phpoo\Banco\Modelo\CPF;
use phpoo\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}
