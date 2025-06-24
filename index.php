/*
 Procurar uma palavra no meio da frase e informar se encontrou a mesma.
*/

<?php

$frase = "Seu grau de sucesso é proporcional ao seu esforço.";
$palavra = "esforço";

$tamanho = strpos($frase, $palavra);

if ($tamanho !== false) {
    echo "Palavra encontrada na frase!";
} else {
    echo "Palavra não encontrada na frase.";
}
echo "<br>";
?>