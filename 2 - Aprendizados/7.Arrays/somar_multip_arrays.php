<?php
//Somar dois arrays
$somar = [];
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

for ($i = 0; $i < count($numerosA); $i++) {

    $somaIndice = $numerosA[$i] + $numerosB[$i];
    $soma[] = $somaIndice;
}
for ($i = 0; $i < count($soma); $i++) {
    echo $soma[$i] . "<br>";
}

echo "<hr>";

//Multiplicar dois arrays
$multiplicar = [];
$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

for ($i = 0; $i < count($numerosA); $i++) {

    $multiplicaIndice = $numerosA[$i] * $numerosB[$i];
    $multiplicar[] = $multiplicaIndice;
}
for ($i = 0; $i < count($multiplicar); $i++) {

    echo $multiplicar[$i] . "<br>";
}
