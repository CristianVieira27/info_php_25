<?php

/**
 * Decompor um valor informado pelo usuario em reais
 * informando quantas notas de cada representam esse valor.
 * $notas = [2, 5, 10, 20, 50, 100, 200];
 * $valor = 170;
 *
 * Saida esperada: 1 nota de 100, 1 nota de 50 e 1 nota de 20.
 * $totalNotas["100"] += 1;
 * Não utilizar funções prontas do PHP.
 */
$totalNotas = [
    "200" => 0,
    "100" => 0,
    "50" => 0,
    "20" => 0,
    "10" => 0,
    "5" => 0,
    "2" => 0,
];
$valor = 1057;
$notas = [200, 100, 50, 20, 10, 5, 2];

$tamanhoArray = count($notas); // 7

for ($i = 0; $i < $tamanhoArray; $i++) {
    $nota = $notas[$i];

    if ($valor >= $nota) {
        $quantidade = (int) ($valor / $nota); // 1.2 => 1
        $valor -= $nota * $quantidade;
        $totalNotas[$nota] += $quantidade;
    }

    if ($valor == 0) {
        break;
    }
}

foreach ($totalNotas as $notas => $quantidade) {
    // 1 nota de 100;
    echo "$quantidade nota(s) de $notas. <br>";
}
