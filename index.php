<?php 
$ano = 1998;
$anoAtual = date("Y");
$idade = $anoAtual - $ano;


if($idade > 18){
    echo "Usuário possuí idade maior que 18 anos. Sua idade é: $idade ";
} else {
    echo "Usuário possuí idade menor que 18 anos. Sua idade é: $idade ";
}

echo "<br><br><br><br><br>";

$prova1 = 7;
$prova2 = 8;
$prova3 = 6;
$prova4 = 7;
$soma = ($prova1 + $prova2 + $prova3 + $prova4);
$media = $soma / 4;

echo "A média do aluno é: $media <br>";
if($media >= 7){
    echo "Aprovado com média: $media";
} else {
    echo "Reprovado com média: $media";
}

echo "<br><br><br><br><br>";

$soma = ($prova1 + $prova2 + $prova3 + $prova4);
$media = $soma / 4;

// Média ponderada 

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

// Média harmônica

$media_harmonica = 4 / (
    (1/$prova1) +
    (1/$prova2) +
    (1/$prova3) +
    (1/$prova4)
);

echo "A média do aluno é: $media <br>";
echo "A média ponderada do aluno é: $media_ponderada <br>";
echo "A média harmônica do aluno é: $media_harmonica <br>";

if($media >= 7){
    echo "Aprovado com média: $media";
} else {
    echo "Reprovado com média: $media";
}

?>
