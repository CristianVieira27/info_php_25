<?php

class Carro
{
    public $marca = "";
    public $ligado = false;
    public $bateriaComCarga = true;
    public $temCombustivel = true;

    public function ligar()
    {
        $this->ligado = true;
    }

    public function desligar()
    {
        $this->ligado = false;
    }

    public function rodar()
    {
        $podeRodar = $this->bateriaComCarga && $this->temCombustivel && $this->ligado;

        if ($podeRodar) {
            echo "O carro já pode rodar...";
        } else {
            echo "O carro está desligado, ligue o carro antes...";
        }
    }

    public function exibir()
    {
        if ($this->ligado) {
            echo "O carro já pode rodar...";
        } else {
            echo "O carro está desligado, ligue o carro antes...";
        }
    }
}

$objCarro = new Carro();
$objCarro->exibir();
