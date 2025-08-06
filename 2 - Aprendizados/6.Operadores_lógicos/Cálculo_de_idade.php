<?php

$ano = 1998;
$anoAtual = date("Y");
$idade = $anoAtual - $ano;

if ($idade > 18) {
    echo "Usuário possui idade maior que 18 anos. Sua idade é: $idade ";
} else {
    echo "Usuário possui idade menor que 18 anos. Sua idade é: $idade ";
}