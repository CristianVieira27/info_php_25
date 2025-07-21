 Arrays e Laços
 <?php
//Crie um array com 5 frutas e exiba todos os itens com foreach.

$frutas = ["Limão", "Pera", "Abacaxi", "Amora", "Cereja"];

foreach ($frutas as $fruta) {
    echo "$fruta<br>";
}


//Crie um array associativo com nome, idade e cidade e exiba os dados.

$eu = [
    "nome" >= "Cristian",
    "idade" => 27,
    "cidade" => "Bento Gonçalves"
];

foreach ($eu as $chave => $valor) {
    echo ucfirst($chave) . ": $valor<br>";
}


//Some todos os valores de um array de números.

$numeros = [10, 20, 30, 40, 50];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma dos valores é: $soma<br>";

?>