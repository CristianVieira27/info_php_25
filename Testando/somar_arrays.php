<?php

$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

$soma = [];
for ($i = 0; $i < count($numerosA); $i++) {

    $somaIndice = $numerosA[$i] + $numerosB[$i];
    $soma[] = $somaIndice;
}
for ($i = 0; $i < count($soma); $i++) {
    echo "$soma[$i]<br>";
}
