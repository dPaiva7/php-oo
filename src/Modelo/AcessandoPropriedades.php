<?php

namespace phpoo\Banco\Modelo;

trait AcessandoPropriedades
{
    public function __get(string $nomeAtributo): string
    {
        $metodo = "recupera" . ucfirst($nomeAtributo);

        return $this->$metodo();
    }
}