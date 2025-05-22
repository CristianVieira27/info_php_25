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
?>