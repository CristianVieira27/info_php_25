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

Para calcular a média ponderada, multiplica cada valor do conjunto por seu peso, soma esses produtos e divide pelo total dos pesos. Em outras palavras, a média ponderada dá mais importância a valores que têm maior peso. 
Passos:
Identificar os valores e seus pesos: Determine os valores que serão utilizados no cálculo e os pesos correspondentes a cada valor.
Multiplicar cada valor pelo seu peso: Multiplique cada valor pelo seu peso correspondente.
Soma dos produtos: Some todos os resultados das multiplicações.
Soma dos pesos: Some todos os pesos.
Dividir a soma dos produtos pela soma dos pesos: Divida o resultado do passo 3 pelo resultado do passo 4.
O resultado é a média ponderada: O resultado final é a média ponderada do conjunto de valores. 
Exemplo:
Suponha que você tenha as seguintes notas em um curso, com os seus respectivos pesos:
Prova 1: 8,0 (peso 2)
Prova 2: 9,0 (peso 3)
Trabalho: 7,0 (peso 1)
Multiplicação:
8,0 * 2 = 16,0
9,0 * 3 = 27,0
7,0 * 1 = 7,0
Soma dos produtos:
16,0 + 27,0 + 7,0 = 50,0
Soma dos pesos:
2 + 3 + 1 = 6
Divisão:
50,0 / 6 = 8,33
Média Ponderada: A média ponderada do curso é 8,33. 



Para calcular a média harmônica de um conjunto de valores, divide-se o número total de elementos pela soma dos inversos de cada elemento do conjunto. Em termos matemáticos, se tivermos n valores (x1, x2, ..., xn), a média harmônica (MH) é calculada como: 
MH = n / (1/x1 + 1/x2 + ... + 1/xn). 
Passo a passo:
Encontrar os inversos de cada elemento: Para cada valor do conjunto, calcule o seu inverso (1/x).
Soma dos inversos: Adicione todos os inversos calculados no passo anterior.
Dividir o número de elementos pela soma: Divida o número total de elementos do conjunto pela soma dos inversos obtida no passo 2. O resultado é a média harmônica.
Exemplo:
Considere o conjunto {2, 3, 4}. 
Inversos: 1/2, 1/3, 1/4
Soma dos inversos: 1/2 + 1/3 + 1/4 = 13/12
Média harmônica: 3 / (13/12) = 36/13 ≈ 2.77.