Funções em PHP
<?php
//Crie uma função que receba dois números e retorne a soma.

function soma($num1, $num2) {
    return $num1 + $num2;
}


//Crie uma função que calcule a média de três notas.

function medias($nota1, $nota2,$nota3) {
    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma / 3;
    return $media;
}


//Crie uma função que receba um nome e retorne uma saudação personalizada.

function saudacao($nome) {
    return "Olá, " . $nome . "! Seja bem vindo(a)!<br>";
}

?>