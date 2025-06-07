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


echo "<br><br><br>";


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

echo "<br><br><br>";



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

echo "<br><br><br>";

javascript
let a = 10;
let b = 5;

let soma = a + b;
let subtracao = a - b;
let multiplicacao = a * b;
let divisao = a / b;
let potencia = a ** 2;
let modulo = a % b;


echo "<br><br><br>";



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


echo "<br><br><br>";


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

    echo "<br><br><br>";


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

    
   echo "<br><br><br>";




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

    echo "<br><br><br>";

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

echo "<br><br><br>";



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


echo "<br><br><br>";

// Ler 3 valores(A, B e C) e informar se eles sao iguais.
$valorA = 10;
$valorB = 10;
$valorC = 10;

if ($valorA == $valorB && $valorA == $valorC) {
    echo "Os 3 valores sao iguais.";
} else {
    echo "Os valores sao diferentes";
}


echo "<br><br><br>";


/* Ler 3 valores(A, B e C) e informar ao usuario qual tipo de triangulo ele forma.
    OU se não formam nenhum triangulo. 
    Triangulos a considerar: equilatero, isoceles e escaleno 
*/
$valorA = 7;
$valorB = 8;
$valorC = 8;


if ($valorA == $valorB && $valorA == $valorC) {
    echo "Os valores informados formam um triangulo equilatero.";
} 
else if (
    ($valorA == $valorB && $valorA > $valorC) ||
    ($valorB == $valorC && $valorB > $valorA) ||
    ($valorA == $valorC && $valorA > $valorB)
    ) {
    echo "Os valores informados formam um triangulo isoceles.";
}
else if (
    ($valorA != $valorB && $valorB != $valorC) &&
    ($valorA + $valorB > $valorC)
    ) {
         echo "Os valores informados formam um triangulo escaleno.";
    }
else {
    echo "Os valores informados NÃO formam um triangulo";
}


echo "<br><br><br>";


$multiplicador = 5;

for ($i = 0; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;

    echo "$multiplicador * $i = $resultado" . "<br>";
}


echo "<br><br><br>";



 1. Loop for
Usado quando sabemos quantas vezes queremos repetir.

 Sintaxe:
php

for (início; condição; incremento) {
    // Código a repetir

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Valor de i: $i <br>";
}

 Explicação:
$i = 1: começa em 1

$i <= 5: repete até $i chegar a 5

$i++: aumenta $i de 1 em 1
?>


echo "<br><br><br>";

 2. Loop while
Usado quando não sabemos exatamente o número de repetições, mas temos uma condição.

 Sintaxe:
php

while (condição) {
    // Código a repetir
}
✅ Exemplo:
php

<?php
$i = 1;
while ($i <= 5) {
    echo "Valor de i: $i <br>";
    $i++;
}
?>
🧠 Explicação:
Verifica a condição antes de executar o código.

echo "<br><br><br>";


3. Loop do while
Semelhante ao while, mas garante que o código será executado pelo menos uma vez.

📌 Sintaxe:
php

do {
    // Código a repetir
} while (condição);
✅ Exemplo:
php

<?php
$i = 1;
do {
    echo "Valor de i: $i <br>";
    $i++;
} while ($i <= 5);
?>
🧠 Diferença:
Executa o bloco primeiro, depois verifica a condição.

echo "<br><br><br>";
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

<?php

//Loop FOR
📌 O que é o for?
O loop for é usado para repetir um bloco de código um número conhecido de vezes.


for (início; condição; incremento) {
    // código que será repetido
}

- início: valor inicial da variável (geralmente usada como contador).

- condição: enquanto for verdadeira, o loop continua.

- incremento: como o contador muda a cada repetição (ex: +1 ou -1).

            Exemplo simples: Contar de 1 até 5
php

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}
?>

//🔍 Explicação:
$i = 1: começa com 1.

$i <= 5: roda enquanto $i for menor ou igual a 5.

$i++: aumenta $i em 1 a cada volta.


//Loop While
📌 O que é o while?
O while é um tipo de laço que repete um bloco de código enquanto uma condição for verdadeira.


while (condição) {
    // código que será repetido
}

- A condição é verificada antes de cada repetição.

- Se for falsa logo no início, o código não roda nenhuma vez.

                    Exemplo: Contar de 1 até 5
php

<?php
$i = 1;

while ($i <= 5) {
    echo "Número: $i<br>";
    $i++;
}
?>
🔍 Explicação:
Começamos com $i = 1.

Enquanto $i <= 5, o bloco dentro do while será executado.

Cada vez que roda, mostra o número e aumenta $i com $i++

🧠 Dica:
Você pode usar while quando não sabe exatamente quantas vezes o código deve repetir, mas quer que continue enquanto uma condição for verdadeira.

<br><br><br><br>