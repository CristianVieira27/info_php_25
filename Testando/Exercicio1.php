<?php

function ordenarArray(array $dados, string $ordem) {

    $tam = count($dados);

    for($i = 0; $i < $tam - 1; $i++) {

        for($j = 0; $j < $tam - 1; $j++) {

            $proximoIndice = $j + 1;
            $numeroAtual = $dados[$j];
            $proxNumero = $dados[$proximoIndice];
        
            if ($numeroAtual < $proxNumero) {
                $aux = $numeroAtual;
                $numeroAtual = $proxNumero;
                $proxNumero = $aux;
        
                $dados[$j] = $numeroAtual;
                $dados[$proximoIndice] = $proxNumero;
            }
        } // fim FOR $j
    } // fim FOR $i

    return $dados;
} // fim funcao

function exibirDados(array $dados) {
    $tam = count($dados);

    for ($i = 0; $i < $tam; $i++) {
        echo "Array ordenado desc (maior -> menor): $dados[$i]" . "<br>";
    }

    echo "<br>";
}

$numeros = [2,10, 20, 30, 60, 5,40, 50, 1, 500];
$alfa = ["A", "B", "C", "D", "E"];

$numerosOrdenados = ordenarArray($numeros);
$alfa = ordenarArray($alfa);

exibirDados($numerosOrdenados);
exibirDados($alfa);