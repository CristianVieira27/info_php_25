<?php
//Somar dois arrays
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

$soma = [];
for ($i = 0; $i < count($numerosA); $i++) {

    $somaIndice = $numerosA[$i] + $numerosB[$i];
    $soma[] = $somaIndice;

    echo "$soma[$i]<br>";
}
    

echo "<hr>";

//Multiplicar dois arrays
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

$multiplicar = [];
for ($i = 0; $i < count($numerosA); $i++) {

    $multiplicaIndice = $numerosA[$i] * $numerosB[$i];
    $multiplicar[] = $multiplicaIndice;

    echo "$multiplicaIndice <br>";
}
