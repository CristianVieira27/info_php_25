<?php

/**
 * Decompor um valor informado pelo usuário em reais.
 * Informando quantas notas de cada representam esse valor.
 * $notas = [2, 5, 10, 20, 50, 100, 200];
 * $valor = 170;
 * 
 * Saída esperada: 1 nota de 100, 1 nota de 50 e 1 nota de 20.
 *
 * Não utilizar funções prontas do php.
 */


//Array associativo
$valor = 170; 
$notas = [200, 100, 50, 20, 10, 5, 2];
$totalNotas = [
    "200" => 0,
    "100" => 0,
    "50" => 0,
    "20" => 0,
    "5" => 0,
    "2" => 0
];

 $tamanhoarray = count($notas);
 
for ($i = 0; $i < $tamanhoarray; $i++) {
    $nota = $notas[$i];
    

    if ($valor >= $notas[$i]) 
        $
    
    }