<?php

$dia = 29;
$mes = 2;
$ano = 2025;

$diasPorMes = [
    1 => 31,
    2 => 28,
    3 => 31,
    4 => 30,
    5 => 31,
    6 => 30,
    7 => 31,
    8 => 31,
    9 => 30,
    10 => 31,
    11 => 30,
    12 => 31
];

// Verificando se o ano é bissexto
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    $bissexto = true;
    $diasPorMes[2] = 29;
} else {
    $bissexto = false;
}

// Verifica se a data é válida
if (
    $mes >= 1 && $mes <= 12 &&
    $dia >= 1 && $dia <= $diasPorMes[$mes]
) {
    echo "Data válida: $dia/$mes/$ano\n";
    echo $bissexto ? "Ano bissexto\n" : "Ano comum\n";
} else {
    echo "Data inválida: $dia/$mes/$ano\n";

    // Corrige a data para a próxima data válida
    $dia++; // soma 1 dia

    // Verifica se passou o número de dias do mês
    if ($dia > $diasPorMes[$mes]) {
        $dia = 1;
        $mes++; // pula para o próximo mês

        // Se passou de dezembro, muda o ano
        if ($mes > 12) {
            $mes = 1;
            $ano++;
        }
    }

    echo "Próxima data válida: $dia/$mes/$ano\n";
}