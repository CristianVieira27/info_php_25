🔹 1. Array Indexado (ou Numérico)
Os índices são números, começando do 0.
<?php
$frutas = array("Maçã", "Banana", "Laranja");
echo $frutas[0]; // Maçã
echo $frutas[1]; // Banana

//Você também pode criar assim:

$frutas[] = "Maçã";
$frutas[] = "Banana";
$frutas[] = "Laranja";
?>

🔹 2. Array Associativo
Os índices são nomes (strings), como se fosse um dicionário.
<?php
$idade = array(
    "Ana" => 25,
    "Bruno" => 30,
    "Carlos" => 22
);
echo $idade["Bruno"]; // 30

//Outra forma:

$idade["Ana"] = 25;
$idade["Bruno"] = 30;
$idade["Carlos"] = 22;

?>

🔹 3. Array Multidimensional
É um array dentro de outro array (como uma tabela ou matriz).
<?php
$alunos = array(
    array("João", 20, "Masculino"),
    array("Maria", 22, "Feminino"),
    array("Pedro", 19, "Masculino")
);

echo $alunos[1][0]; // Maria
echo $alunos[2][1]; // 19
?>

🔹 Como percorrer arrays
Com foreach (recomendado para arrays associativos):
<?php
$cores = array("vermelho", "verde", "azul");
foreach ($cores as $cor) {
    echo $cor . "<br>";
}

//Com foreach em arrays associativos:

$salarios = array("João" => 1200, "Ana" => 1500);
foreach ($salarios as $nome => $valor) {
    echo "$nome ganha R$ $valor<br>";
}
?>

🔹 Algumas funções úteis para arrays:

Função O que faz

count($array) Conta quantos elementos tem
array_push() Adiciona no final
array_pop() Remove o último elemento
array_keys() Retorna todas as chaves (índices)
array_values() Retorna todos os valores
in_array() Verifica se um valor está no array
sort() Ordena valores em ordem crescente
asort() Ordena mantendo as chaves


🔧 Funções úteis para Arrays
Função Descrição
count($array) Conta quantos elementos há no array
array_push() Adiciona um item ao final do array
array_pop() Remove o último item do array
in_array() Verifica se um valor está no array
sort() Ordena os valores do array
print_r() Mostra o conteúdo do array (debug)

Exemplo:
<?php
$numeros = [3, 1, 4, 1, 5, 9];
sort($numeros);
print_r($numeros);
?>