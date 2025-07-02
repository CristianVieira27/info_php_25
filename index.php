<?php

 $data = "32/01/2025";
 $dataArray = explode("/",$data);

$dia = $dataArray [0];
$mes = $dataArray [1];
$ano = $dataArray [2]; 

if ($dia < 1 || $dia > 31){
    $dia = 1;
    $mes = $mes + 1;
}

if ($mes < 1 || $mes > 12){
    $dia = 1;
    $mes = 1;
}

if ($ano < 1 ){
    $dia = 1;
    $mes = 1;
    $ano = 1900; 
}

if ($dia = 1 || $dia > 31){
    $dia = 1;

}
 























echo "<br>"; 
/**
 * Calendario: usuario vai informar uma data, validar essa data,
 * caso for uma data invalida, retornar a proxima data correta.
 * Ex.: 29/02/2025 => 01/03/2025
 * Ex.: 31/04/2025 => 01/05/2025
 * 
 * Funcao PHP: explode;
 */

 $data = "29/02/2025";
 $dataArray = explode("/", $data);

 $dia = $dataArray[0];
 $mes = $dataArray[1];
 $ano = $dataArray[2];



 /**
  * Ordenar os arrays abaixo em ordem decrescente (maior para menor):
  * $alfa = ["A", "B", "C", "D", "E"];
  * $numeros = [10, 20, 30, 40, 50];
  * Saida esperada: E, D, C, B, A
  * 50, 40, 30, 20, 10

  * Utilizar somente laço FOR. Não utilizar funcoes prontas do PHP para ordenacao.
  */