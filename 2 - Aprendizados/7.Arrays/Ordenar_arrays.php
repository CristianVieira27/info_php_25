<?php

function ordenarArray(array $dados, string $ordem = "DESC") {
    $tam = count($dados);

    for ($i = 0; $i < $tam - 1; $i++) {
        for ($j = 0; $j < $tam - 1; $j++) {
            $proximoIndice = $j + 1;
            $numeroAtual = $dados[$j];
            $proxNumero = $dados[$proximoIndice];

            if (
                ($ordem === "DESC" && $numeroAtual < $proxNumero) ||
                ($ordem === "ASC" && $numeroAtual > $proxNumero)
            ) {
                // Troca os valores
                $dados[$j] = $proxNumero;
                $dados[$proximoIndice] = $numeroAtual;
            }
        }
    }

    return $dados;
}

function exibirDados(array $dados, string $ordem = "DESC") {
    $tam = count($dados);

    echo "Array ordenado $ordem:<br>";
    for ($i = 0; $i < $tam; $i++) {
        echo $dados[$i] . "<br>";
    }
    echo "<br>";
}

$numeros = [2, 10, 20, 30, 60, 5, 40, 50, 1, 500];
$alfa = ["A", "B", "C", "D", "E"];

$numerosOrdenadosDesc = ordenarArray($numeros, "DESC");
$numerosOrdenadosAsc = ordenarArray($numeros, "ASC");
$alfaDesc = ordenarArray($alfa, "DESC");
$alfaAsc = ordenarArray($alfa, "ASC");

exibirDados($numerosOrdenadosDesc, "DESC");
exibirDados($numerosOrdenadosAsc, "ASC");
exibirDados($alfaDesc, "DESC");