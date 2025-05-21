abrir vscode
ver se ta logado ubuntu (canto inferior esquerdo)
file open folder: seleciona tudo e apaga
 - /var/www/html e da um ok
 terminal novo terminal 
 - git clone LINK_GITHUB da um enter
 file open folder: seleciona tudo e apaga
 - /var/www/html/info_php_25 e da um ok
 terminal novo terminal 
  verifica se esta em: /var/www/html/info_php_25





<!DOCTYPE html>
<html>
<head>
    <title>Olá Mundo! em PHP</title>
</head>
<body>
    <?php
    echo "<h1>Olá Mundo!</h1>";
    echo "<p>Este é o meu primeiro programa em PHP.</p>";
    ?>
</body>
</html>



Operações matemáticas

PHYTON
a = 10
b = 5

soma = a + b       # Adição
subtracao = a - b  # Subtração
multiplicacao = a * b  # Multiplicação
divisao = a / b    # Divisão
potencia = a ** 2  # Potenciação
modulo = a % b     # Módulo (resto da divisão)



javascript
let a = 10;
let b = 5;

let soma = a + b;
let subtracao = a - b;
let multiplicacao = a * b;
let divisao = a / b;
let potencia = a ** 2;
let modulo = a % b;






Exemplos com Operadores de comparação
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

Exemplos com Operadores lógicos
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

Exemplos com Operadores de atribuição
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

    
    <br><br><br><br>



    https://www.w3schools.com/



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
    
    echo "<p>Olá! Meu nome é $nome, tenho $idade anos!</p>";
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

    <br><br><br><br>


    <?php ?>
</body>
</html>

