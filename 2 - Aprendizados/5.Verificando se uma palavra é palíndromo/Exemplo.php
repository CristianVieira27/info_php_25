<?php

/*Um palíndromo é uma palavra que pode ser lida da mesma forma de trás para frente, como "radar" ou "arara". Veja como verificar isso em PHP:

Procurar uma palavra no meio da frase e informar se encontrou a mesma.

$i
E s c o l a     i n f o s e r v        c u r s o   d e   P H P .
0 1 2 3 4 5  6  7 8 9 10 11 12 13  14  15 16 17 18  19  20 21  22 23 24 25 26 27 28

$j
c u r s o
0 1 2 3 4

*/

$palavraProcurada = "curso";
$frase = "Escola infoserv curso de PHP."; // curso

$tamanho = strlen($frase) - 1; // 28
$tamanhoPalavra = strlen($palavraProcurada) - 1; // 28

$tamanhoReal = $tamanho - $tamanhoPalavra;

$palavraEncontrada = false;

// percorre a frase toda, letra a letra
for ($i = 0; $i <= $tamanhoReal; $i++) {

    $letrasIguais = true;

    // percorre toda a palavra, letra a letra
    for ($j = 0; $j <= $tamanhoPalavra; $j++) {

        $indiceAtualDaFrase = $i + $j;
        // $k = $i + $j;

        $letraAtualDaFrase = $frase[$indiceAtualDaFrase];
        $letraAtualDaPalavra = $palavraProcurada[$j];

        if ($letraAtualDaFrase != $letraAtualDaPalavra) {
            $letrasIguais = false;
            break;
        }
    }

    if ($letrasIguais) {
        $palavraEncontrada = true;
        break;
    }
}

if ($palavraEncontrada) {
    echo "Encontrou a palavra procurada.";
} else {
    echo "Não Encontrou.";
}