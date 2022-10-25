<?php

namespace phpoo\Banco\Service;

use phpoo\Banco\Modelo\Autenticacao;

class Autenticador
{
    public function tentaLogin(Autenticacao $autenticavel, string $senha): void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuário logado no sistema";
        } else {
            echo "Senha incorreta.";
        }
    }
}