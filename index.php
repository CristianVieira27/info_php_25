
  /**
  * Multiplicar os arrays/vetores abaixo:
  * $numerosA = [10, 20, 30, 40, 50];
  * $numerosB = [5, 45, 37, 2, 25];
  *
  * Saida esperada: $produto[50, 900, 1110, 80, 1250]

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP.
  *
  /
    <?php

$numerosA = [10, 20, 30, 40, 50];
$numerosB = [5, 45, 37, 2, 25];

$multiplicar = [];
for ($i = 0; $i < count($numerosA); $i++) {

    $multiplicaIndice = $numerosA[$i] * $numerosB[$i];
    $multiplicar[] = $multiplicaIndice;
}
for ($i = 0; $i < count($multiplicar); $i++) {
    echo "$multiplicar[$i]<br>";
}
