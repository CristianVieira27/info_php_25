 Operadores e Estruturas Condicionais
<?php
//Crie um programa que receba duas notas e diga se o aluno foi aprovado (média ≥ 6).

$nota1 = 7;
$nota2 = 6.5;

$media = ($nota1 + $nota2) / 2;
if ($media >= 6) {
    echo "Aprovado.<br>;"
} else {
    echo "Reprovado.<br>";
}


//Verifique se uma variável está vazia e mostre uma mensagem.

$variavel = "";
if (empty($variavel)) {
    echo "A variável está vazia.<br>";
}else {
    echo "A variável contém valor.<br>";
}


//Receba uma idade e diga se é maior de idade.

$idade = 27;

if ($idade >= 18) {
    echo "Maior de idade.<br>;"
} else {
    echo "Menor de idade.<BR>";
}

?>