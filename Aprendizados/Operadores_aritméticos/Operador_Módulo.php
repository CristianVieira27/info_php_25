<?php

echo 10 % 3; // Resultado: 1
echo 15 % 5; // 0
echo 9 % 2;  // 1
echo 18 % 4; // 2

// Verificar se número é par ou ímpar
$numero = 7;
if ($numero % 2 == 0) {
    echo "$numero é par";
} else {
    echo "$numero é ímpar";
}