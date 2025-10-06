<?php

//Usando raiz quadrada
$primos = 0;
$num = 2;
while ($primos < 5) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo $num . "<br>";
        $primos++;
    }
    $num++;
}

echo "<br>";


//Usando contagem de divisores
$primos = 0;
$num = 2;
while ($primos < 5) {
    $divisores = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2) {
        echo $num . "<br>";
        $primos++;
    }
    $num++;
}
