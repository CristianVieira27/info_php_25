<?php

class Carro 
{
    public $cor = "";
    public $modelo = ""; 
    public $ano = "";
    public $combustivel = "";


    public function buzinar()
    {
        echo "Bii, bii.<br>";
    }

    public function mostrar()
    {
        echo "Carro modelo $this->modelo, na cor $this->cor do ano $this->ano, movido a $this->combustivel.<br>";
    }
}

$objCarro = new Carro();
$objCarro->cor = "Cinza";
$objCarro->modelo = "Chevette";
$objCarro->ano = 1990;
$objCarro->combustivel = "Gasolina";

$objCarro->mostrar();
$objCarro->buzinar();
