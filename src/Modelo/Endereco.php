<?php

namespace phpoo\Banco\Modelo;

class Endereco
{
    private $cidade;
    private $bairro;
    private $rua;
    private $numero;
    use AcessandoPropriedades;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function recuperaCidade(): string
    {
        return $this->cidade;
    }

    public function recuperaBairro(): string
    {
        return $this->bairro;
    }

    public function recuperaRua(): string
    {
        return $this->rua;
    }

    public function recuperaNumero(): string
    {
        return $this->numero;
    }

    public function alterarRua($novaRua): void
    {
        $this->rua = $novaRua;
    }

    public function alterarCidade($novaCidade): void
    {
        $this->cidade = $novaCidade;
    }

    public function alterarBairro($novaBairro): void
    {
        $this->bairro = $novaBairro;
    }

    public function alterarNumero($novaNumero): void
    {
        $this->numero = $novaNumero;
    }

    public function __toString()
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }

    public function __set($nomeAtributo, $value)
    {
        $metodo = "alterar" . ucfirst($nomeAtributo);

        return $this->$metodo($value);
    }
}
