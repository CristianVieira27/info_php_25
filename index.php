
// $i = 0;
// while ($i <= 10) {
    
//     $resultado = $multiplicador * $i;
//     echo "$multiplicador * $i = $resultado" . "<br>";
    
//     $i++;
// }


//  + - * / %(modulo)

$resultado = 10 / 2 ; // 5 Quociente
$resultado = 10 % 2 ; // 0 resto da divisao

$numero = 10;
$resto = $numero % 2 ; // 1
$par = $resto == 0; // verdade true




// Encontrar os 20 primeiros numeros pares e exibi-los

$contPares = 0;
for ($numero = 2; $contPares < 20; $numero++) {
    $resto = $numero % 2;
    $par = $resto == 0;

    if ($par) {
        echo "O numero $numero é par! <br>";
        $contPares++;
    }
}
?>

<br><br><br><br><br>


<?php


$contador = 10;

for ($contador <= 0 ; $contador >= 0; $$contador--) {
    echo "$contador <br>";
}
    echo "$$contador <br>";
}

// Encontrar os 5 primeiros numeros primos;
// 2, 3, 5, 7, 11, 13, 17, 19,
$contPrimos = 0;

for ($numeroAvaliado = 3; $contPrimos < 5; $numeroAvaliado++) {
    $penultimoNumero = $numeroAvaliado - 1;

    for($divisor = 2; $divisor <= $penultimoNumero; $divisor++) {

        $resto = $numeroAvaliado % $divisor;
        $divisaoExata = $resto == 0;

        if ($divisaoExata && $divisor < $penultimoNumero) {
            break;
        }

        // implementar a logica
    }