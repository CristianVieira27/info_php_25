<?php
//Média simples
$prova1 = 7;
$prova2 = 8;
$prova3 = 6;
$prova4 = 7;
$soma = ($prova1 + $prova2 + $prova3 + $prova4);
$media = $soma / 4;



//Média ponderada

/*Para calcular a média ponderada:
1. Multiplique cada valor pelo seu peso.
2. Some todos os resultados.
3. Some todos os pesos.
4. Divida a soma dos produtos pela soma dos pesos.

Exemplo:
- Prova 1: 8,0 (peso 2)
- Prova 2: 9,0 (peso 3)
- Trabalho: 7,0 (peso 1)*/

$peso1 = 1;
$peso2 = 2;
$peso3 = 3;
$peso4 = 4;
$media_ponderada = (
    $prova1 * $peso1 +
    $prova2 * $peso2 +
    $prova3 * $peso3 +
    $prova4 * $peso4
) / ($peso1 + $peso2 + $peso3 + $peso4);

echo "<br>";


/* Média harmônica

A média harmônica de n valores (x1, x2, ..., xn):
MH = n / (1/x1 + 1/x2 + ... + 1/xn)

Exemplo:
- Conjunto: {2, 3, 4}*/

$media_harmonica = 3 / (1 / 2 + 1 / 3 + 1 / 4);


$media_harmonica = 4 / (
    (1 / $prova1) +
    (1 / $prova2) +
    (1 / $prova3) +
    (1 / $prova4)
);

echo "A média do aluno é: $media <br>";
echo "A média ponderada do aluno é: $media_ponderada <br>";
echo "A média harmônica do aluno é: $media_harmonica <br>";

if ($media >= 7) {
    echo "Aprovado com média: $media";
} else {
    echo "Reprovado com média: $media";
}
