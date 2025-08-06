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