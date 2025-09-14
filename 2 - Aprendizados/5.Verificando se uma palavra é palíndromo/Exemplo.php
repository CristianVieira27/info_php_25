<?php

/*Um palíndromo é uma palavra que pode ser lida da mesma forma de trás para frente, como "radar" ou "arara". Veja como verificar isso em PHP:
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
