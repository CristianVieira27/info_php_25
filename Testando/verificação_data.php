<?php
// Dados de entrada (poderiam vir de um formulário, por exemplo)
$dia = 29;
$mes = 2;
$ano = 2025;

// Dias de cada mês. O índice 1 é Janeiro, 12 é Dezembro
$diasPorMes = [
    1 => 31, // Janeiro
    2 => 28, // Fevereiro (ajustamos depois se for bissexto)
    3 => 31, // Março
    4 => 30, // Abril
    5 => 31, // Maio
    6 => 30, // Junho
    7 => 31, // Julho
    8 => 31, // Agosto
    9 => 30, // Setembro
    10 => 31, // Outubro
    11 => 30, // Novembro
    12 => 31  // Dezembro
];

// Verificando se o ano é bissexto
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    $bissexto = true;
    $diasPorMes[2] = 29; // Fevereiro com 29 dias
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
?>
