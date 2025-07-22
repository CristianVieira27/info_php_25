<?php

$valorA = 7;
$valorB = 8;
$valorC = 8;

if ($valorA == $valorB && $valorA == $valorC) {
    echo "Equilátero";
} elseif ($valorA == $valorB || $valorB == $valorC || $valorA == $valorC) {
    echo "Isósceles";
} elseif ($valorA != $valorB && $valorB != $valorC && $valorA != $valorC) {
    echo "Escaleno";
} else {
    echo "Não formam um triângulo";
}