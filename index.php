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
// Encontrar os 5 primeiros numeros primos. (LOOP FOR)

$primos = 0;
for ($i = 2; $primos < 5; $i++) {
    $divisores = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2) {
        echo $i . "<br>";
        $primos++;
    }
}
echo "<br><br>";

?>

<?php
// Encontrar os 5 primeiros numeros primos. (LOOP WHILE)
$primos = 0;
$i = 2;
while ($primos < 5) {
    $divisores = 0;
    for ($j = 1; $j <= $i; $j++) {
        if ($i % $j == 0) {
            $divisores++;
        }
    }
    if ($divisores == 2) {
        echo $i . "<br>";
        $primos++;
    }
    $i++;
}
echo "<br><br>";
?>