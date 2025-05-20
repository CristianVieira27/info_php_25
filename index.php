<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP com HTML</title>
</head>

<body>
    <h1>Seja bem vindo ao meu site!</h1>

    <?php 
    $nome = "Cristian";
    $idade = 27; 
    
    echo "<p>Olá! Meu nome é $nome e eu tenho $idade anos!</p>";
    ?>
    <br><br><br><br>

    <h2>Exemplos com Operadores aritméticos</h2>
    <?php

    $valorMultiplicacao = 7;

    echo 1 * $valorMultiplicacao . "<br>";
    echo 2 * $valorMultiplicacao . "<br>";
    echo 3 * $valorMultiplicacao . "<br>";
    echo 4 * $valorMultiplicacao . "<br>"; 
    echo 5 * $valorMultiplicacao . "<br>";
    echo 6 * $valorMultiplicacao . "<br>";
    echo 7 * $valorMultiplicacao . "<br>"; 
    echo 8 * $valorMultiplicacao . "<br>";
    echo 9 * $valorMultiplicacao . "<br>";
    echo 10 * $valorMultiplicacao . "<br>";
    echo "<br>";

    ?>
    <p>Segunda forma de fazer a tabuada</p>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        echo "$i * $valorMultiplicacao = " . ($i * $valorMultiplicacao) . "<br>";
    }
    ?>
   
   <br><br><br><br>

    <h2>Exemplos com Operadores de comparação</h2>
    <?php
    $a = 10;
    $b = 20;

    if ($a == $b) {
        echo "A é igual a B";
    } else {
        echo "A não é igual a B";
    }
    echo "<br>";
    if ($a != $b) {
        echo "A é diferente de B";
    } else {
        echo "A é igual a B";
    }
    echo "<br>";
    if ($a > $b) {
        echo "A é maior que B";
    } else {
        echo "A não é maior que B";
    }
    echo "<br>";


    ?>
    <br><br><br><br>

    <h2>Exemplos com Operadores lógicos</h2>
    <?php
    $a = 10;
    $b = 20;

    if ($a == 10 && $b == 20) {
        echo "A é igual a 10 e B é igual a 20";
    } else {
        echo "A não é igual a 10 ou B não é igual a 20";
    }
    echo "<br>";
    if ($a == 10 || $b == 30) {
        echo "A é igual a 10 ou B é igual a 30";
    } else {
        echo "A não é igual a 10 e B não é igual a 30";
    }
    echo "<br>";
    if ($a == 10 xor $b == 30) {
        echo "A é igual a 10 ou B é igual a 30, mas não os dois";
    } else {
        echo "A não é igual a 10 e B não é igual a 30";
    }
    echo "<br>";
    ?>

    <br><br><br><br>

    <h2>Exemplos com Operadores de atribuição</h2>  
    <?php
    $a = 10;
    $b = 20;

    $a += $b; // $a = $a + $b
    echo "A é igual a $a <br>";
    $a -= $b; // $a = $a - $b
    echo "A é igual a $a <br>";
    $a *= $b; // $a = $a * $b
    echo "A é igual a $a <br>";
    $a /= $b; // $a = $a / $b
    echo "A é igual a $a <br>";
    $a %= $b; // $a = $a % $b
    echo "A é igual a $a <br>";
    $a **= $b; // $a = $a ** $b
    echo "A é igual a $a <br>";
    $a .= $b; // $a = $a . $b
    echo "A é igual a $a <br>";
    $a &= $b; // $a = $a & $b
    echo "A é igual a $a <br>";
    $a |= $b; // $a = $a | $b
    echo "A é igual a $a <br>";
    $a ^= $b; // $a = $a ^ $b
    echo "A é igual a $a <br>";
    $a <<= $b; // $a = $a << $b
    echo "A é igual a $a <br>";
    $a >>= $b; // $a = $a >> $b
    echo "A é igual a $a <br>";

    ?>
    <br><br><br><br>
</body>
</html>