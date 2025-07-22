Estruturas de Repetição
<?php
//Mostre os números de 1 a 10 com while e for.

$i = 1;
while ($i <= 10) {
    echo $i . " ";
    $i++;
}

for ($j = 1; $j <= 10; $j++) {
    echo $j . " ";
}
echo "<br>";


//Crie uma tabuada de multiplicação usando for.

for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $lj) . "<br>";
    }
}


//Calcule a soma dos números de 1 a 100.

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    $soma += $i;
}
echo " A soma dos números de 1 a 100 é: $soma<br>";