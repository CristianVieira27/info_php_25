<?php

$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

$multiplica = [];
for ($i = 0; $i < count($numerosA); $i++) {

    $multiplicaIndice = $numerosA[$i] + $numerosB[$i];
    $multiplica[] = $multiplicaIndice;
}
for ($i = 0; $i < count($multiplica); $i++) {
    echo "$multiplica[$i]<br>";
}
