<?php
//LOOP FOR

for ($i = 0 ; $i <= 10; $i++)
{
    echo $i . "<br>";
};


echo "<br><br>";
?>


<?php
//LOOP FOR

for($i = 10; $i >= 0; $i--)
{
    echo $i . "<br>";
};

echo "<br><br>";
?>


<?php

// Contagem de 1 a 10. (LOOP WHILE)
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