<?php
//LOOP FOR

/*
Este bloco faz uma contagem de 0 a 10 usando o laço for.
*/
for ($i = 0 ; $i <= 10; $i++)
{
    echo $i . "<br>";
};


echo "<br><br>";
?>


<?php
//LOOP FOR

/*
Este bloco faz uma contagem regressiva de 10 a 0 usando o laço for.
*/
for($i = 10; $i >= 0; $i--)
{
    echo $i . "<br>";
};

echo "<br><br>";
?>


<?php

// Contagem de 1 a 10. (LOOP WHILE)
/*
Este bloco faz uma contagem de 0 a 10 usando o laço while.
*/
$i = 0;
while ($i <= 10)
{
    echo $i . "<br>";
    $i++;
}
echo "<br><br>";
?>


<?php

// Contagem de 10 a 0. (LOOP WHILE)
/*
Este bloco faz uma contagem regressiva de 10 a 0 usando o laço while.
*/
$i = 10;
while ($i >= 0)
{
    echo $i . "<br>";
    $i--;
}
echo "<br><br>";
?>

<?php
// Encontrar os 5 primeiros números primos (forma simplificada)
/*
Este bloco encontra e exibe os 5 primeiros números primos usando o laço while.
*/
$primos = 0;
$num = 2;
while ($primos < 5) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo $num . "<br>";
        $primos++;
    }
    $num++;
}
echo "<br><br>";
?>


<?php
// Encontrar os 5 primeiros números primos (usando FOR)
/*
Este bloco encontra e exibe os 5 primeiros números primos usando o laço for.
*/
$primos = 0;
for ($num = 2; $primos < 5; $num++) {
    $ehPrimo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }
    if ($ehPrimo) {
        echo $num . "<br>";
        $primos++;
    }
}
echo "<br><br>";
?>

// $primos = []; // array || vetor == vazio

// $primos = array(2, 3, 5, 7, 11);
// $primos = [2, 3, 5, 7, 11]; // 5 primeiros primos 
//         0, 1, 2, 3, 4

/*
Percorre o array de primos e exibe cada número primo encontrado.
*/
for ($i = 0; $i < count($primos); $i++) {
    $primo = $primos[$i];

    echo "Primo: $primo" . "<br>";
}