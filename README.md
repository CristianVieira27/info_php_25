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
Copiar código
while (condição) {
    // Código a repetir
}
✅ Exemplo:
php
Copiar código
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
Copiar código
do {
    // Código a repetir
} while (condição);
✅ Exemplo:
php
Copiar código
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


Em arrays, você pode ter: apenas valores, pares chave-valor, arrays multidimensionais e uma combinação de todos esses elementos. Os arrays podem ser unidimensionais ou multidimensionais, e podem armazenar diferentes tipos de dados. 
Aprofundamento:
Apenas Valores (Array Indexado):
Um array que armazena uma lista de valores, acessíveis por índices numéricos (0, 1, 2, etc.). Por exemplo: [1, 2, "ola", 3.14]. 
Chaves e Valores (Array Associativo):
Um array que armazena pares de chaves e valores, onde as chaves podem ser de qualquer tipo (string, número, etc.). Por exemplo: {nome: "João", idade: 30}. 
Arrays Multidimensionais:
Arrays que contêm outros arrays. Isso permite criar estruturas de dados mais complexas, como matrizes ou tabelas. Por exemplo: [[1, 2], [3, 4]]. 
Mix de Tudo:
Um array pode conter uma mistura de tipos de dados, incluindo outros arrays e arrays associativos. Por exemplo: [1, {nome: "Ana"}, [5, 6]]. 
Exemplos:
JavaScript

// Array indexado
let numeros = [1, 2, 3, 4];
console.log(numeros[0]); // Imprime 1

// Array associativo
let pessoa = {
  nome: "Maria",
  idade: 25
};
console.log(pessoa.nome); // Imprime "Maria"

// Array multidimensional
let matriz = [
  [1, 2],
  [3, 4]
];
console.log(matriz[0][1]); // Imprime 2

// Mix de tudo
let arrayComplexo = [
  1,
  { nome: "Pedro" },
  [5, 6],
  "Olá"
];
console.log(arrayComplexo[1].nome); // Imprime "Pedro"
console.log(arrayComplexo[2][0]); // Imprime 5
Em resumo: Os arrays são estruturas de dados versáteis que podem ser usadas para organizar e armazenar dados de diferentes tipos e complexidades. 

//funções para array


array — Cria um array
array_all — Verifica se todos os elementos de um array satisfazem uma função de retorno
array_any — Verifica se pelo menos um elemento de um array satisfaz uma função de retorno
array_change_key_case — Modifica a caixa de todas as chaves em um array
array_chunk — Divide um array em pedaços
array_column — Retorna os valores de uma coluna do array informado
array_combine — Cria um array usando um array para chaves e outro para valores
array_count_values — Conta as ocorrências de cada valor distinto em um array
array_diff — Computa as diferenças entre arrays
array_diff_assoc — Computa a diferença entre arrays com checagem adicional de índice
array_diff_key — Computa a diferença entre arrays usando as chaves na comparação
array_diff_uassoc — Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
array_diff_ukey — Computa a diferença entre arrays usando uma função callback na comparação de chaves
array_fill — Preenche um array com valores
array_fill_keys — Preenche um array com valores, especificando chaves
array_filter — Filtra elementos de um array utilizando uma função callback
array_find — Retorna um primeiro elemento que satisfaz uma função de retorno
array_find_key — Retorna a chave do primeiro elemento que satisfaz uma função de retorno
array_flip — Permuta todas as chaves e seus valores associados em um array
array_intersect — Calcula a interseção entre arrays
array_intersect_assoc — Computa a interseção de arrays com uma adicional verificação de índice
array_intersect_key — Calcula a interseção de arrays, comparando pelas chaves
array_intersect_uassoc — Computa a interseção de arrays com checagem de índice adicional, compara índices por uma função de callback
array_intersect_ukey — Computa a interseção de arrays usando uma função de retorno nas chaves para comparação
array_is_list — Verifica se um array é uma lista
array_key_exists — Verifica se uma chave ou índice existe em um array
array_key_first — Obtém a primeira chave de um array
array_key_last — Obtém a última chave de um array
array_keys — Retorna todas as chaves ou uma parte das chaves de um array
array_map — Aplica uma função em todos os elementos dos arrays dados
array_merge — Combina um ou mais arrays
array_merge_recursive — Mescla um ou mais arrays recursivamente
array_multisort — Ordena múltiplos arrays ou arrays multidimensionais
array_pad — Expande um array para um certo comprimento utilizando um determinado valor
array_pop — Extrai um elemento do final do array
array_product — Calcula o produto dos valores de um array
array_push — Adiciona um ou mais elementos no final de um array
array_rand — Escolhe uma ou mais chaves aleatórias de um array
array_reduce — Reduz um array para um único valor através de um processo iterativo via callback
array_replace — Substitui elementos de arrays passados no primeiro array
array_replace_recursive — Substitui elementos de arrays passado no primeiro array recursivamente
array_reverse — Retorna um array com os elementos na ordem inversa
array_search — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
array_shift — Retira o primeiro elemento de um array
array_slice — Extrai uma parcela de um array
array_splice — Remove uma parte array e a substitui por outra coisa
array_sum — Calcula a soma dos elementos de um array
array_udiff — Computa a diferença de arrays usando uma função de callback para comparação dos dados
array_udiff_assoc — Computa a diferença entre arrays com verificação adicional de índice, comparando dados por uma função de retorno
array_udiff_uassoc — Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
array_uintersect — Computa a interseção de array, comparando dados com uma função callback
array_uintersect_assoc — Computa a interseção de arrays com checagem adicional de índice, compara os dados utilizando uma função de callback
array_uintersect_uassoc — Computa a interseção de arrays com checagem adicional de índice, compara os dados e os índices utilizando funções de callback separadas
array_unique — Remove os valores duplicados de um array
array_unshift — Adiciona um ou mais elementos no início de um array
array_values — Retorna todos os valores de um array
array_walk — Aplica uma determinada função em cada elemento de um array
array_walk_recursive — Aplica um função do usuário recursivamente para cada membro de um array
arsort — Ordena um array em ordem descrescente e mantém a associação de índices
asort — Ordena um array em ordem crescente e mantém a associação de índices
compact — Cria um array contendo variáveis e seus valores
count — Conta todos os elementos de um array ou de um objeto Countable
current — Retorna o elemento atual em um array
each — Retorna o par atual de chave e valor de um array e avança o seu cursor
end — Define o ponteiro interno de um array para seu último elemento
extract — Importa variáveis para a tabela de símbolos a partir de um array
in_array — Verifica se um valor existe em um array
key — Retorna uma chave de um array
key_exists — Sinônimo de array_key_exists
krsort — Ordena um array pelas chaves em ordem descrescente
ksort — Ordena um array pelas chaves em ordem crescente
list — Cria variáveis como se fossem arrays
natcasesort — Ordena um array utilizando o algoritmo da "ordem natural" sem diferenciar maiúsculas e minúsculas
natsort — Ordena um array utilizando o algoritmo de "ordem natural"
next — Avança o ponteiro interno de um array
pos — Sinônimo de current
prev — Retrocede o ponteiro interno de um array
range — Cria um array contendo uma faixa de elementos
reset — Faz o ponteiro interno de um array apontar para o seu primeiro elemento
rsort — Ordena um array em ordem descrescente
shuffle — Embaralha um array
sizeof — Sinônimo de count
sort — Ordena um array em ordem ascendente
uasort — Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices
uksort — Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.
usort — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário