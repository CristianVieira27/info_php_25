<?php

class Caneta
{
    public $cor = "Azul";
    public $carga = 100;
    public $ponta = 0.5;
    public $tampada = false;

    public function tampar(): void
    {
        $this->tampada = true;
    }

    public function destampar(): void
    {
        $this->tampada = false;
    }

    public function escrever(): void
    {
        if ($this->carga <= 0) {
            echo "Sem carga, recarregue a caneta!";
            return;
        }

        if ($this->tampada) {
            echo "Destampe a caneta primeiro para usá-la!";
            return;
        }
        echo "Escrevendo com a caneta {$this->cor} de ponta {$this->ponta}mm!";
    }
}

$objCaneta = new Caneta();
$objCaneta->escrever();
