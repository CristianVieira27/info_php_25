<?php

class Carro
{

    public $cor = "";
    public $modelo = "";
    public $ano = "";
    public $combustivel = "";
    public $bateriaComCarga = true;
    public $abastecido = true;
    public $ligado = true;

    public function ligar()
    {
        $this->ligado = false;
    }

    public function desligar()
    {
        $this->ligado = false;
    }
    public function rodar()
    {
        $podeRodar = $this->abastecido && $this->bateriaComCarga && $this->ligado;

        if ($podeRodar) {
            echo "O carro pode rodar!";
        } else {
            echo "O carro está desligado. Ligue-o para poder rodar!";
        }
    }
    public function mostrar()
    {
        if ($this->ligado) {
            echo "O carro pode rodar!";
        } else {
            echo "O carro está desligado. Ligue-o para poder rodar!";
        }
    }
}

$objCarro = new Carro();
$objCarro->ligar();
$objCarro->mostrar();
