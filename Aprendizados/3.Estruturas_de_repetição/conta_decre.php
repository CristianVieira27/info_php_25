<?php

$letras = ["A", "B", "C", "D", "E"];
$tam = count($letras);

for ($i = 0; $i < $tam - 1; $i++) {
    for ($j = 0; $j < $tam - 1; $j++) {
        $proximoIndice = $j + 1;
        $atual = $letras[$j];
        $prox = $letras[$proximoIndice];

        // Troca de posição se o atual for menor que o próximo (ordem decrescente)
        if ($atual < $prox) {
            $letras[$j] = $prox;
            $letras[$proximoIndice] = $atual;
        }
    }
}

echo "Array ordenado decrescente:<br>";
foreach ($letras as $letra) {
    echo $letra . "<br>";
}
echo '<br>';

$numeros = ["10", "20", "30", "40", "55"];
$tam = count($numeros);

for ($j = 0; $j < $tam - 1; $j++) {
    for ($k = 0; $k < $tam - 1; $k++) {
        $proximoIndice = $k + 1;
        $atual = $numeros[$k];
        $prox = $numeros[$proximoIndice];

        // Troca de posição se o atual for menor que o próximo (ordem decrescente)
        if ($atual < $prox) {
            $numeros[$k] = $prox;
            $numeros[$proximoIndice] = $atual;
        }
    }
}

echo "Array de números ordenado decrescente:<br>";
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}