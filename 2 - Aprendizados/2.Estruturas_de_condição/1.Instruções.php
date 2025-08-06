✅ PRINCIPAIS ESTRUTURAS DE CONDIÇÃO EM PHP

🔹 1. if
Executa um bloco de código se a condição for verdadeira.
<?php
$idade = 18;

if ($idade >= 18) {
    echo "Você é maior de idade.";
}
?>

🔹 2. if...else
Executa um bloco se for verdadeiro e outro se for falso.
<?php
$nota = 6;

if ($nota >= 7) {
    echo "Aprovado!";
} else {
    echo "Reprovado.";
}
?>

🔹 3. if...elseif...else
Permite testar várias condições diferentes.
<?php
$nota = 8;

if ($nota >= 9) {
    echo "Excelente!";
} elseif ($nota >= 7) {
    echo "Aprovado!";
} else {
    echo "Reprovado.";
}
?>

🔹 4. switch
Usado quando há várias opções de valor para uma mesma variável.
<?php
$dia = "terça";

switch ($dia) {
    case "segunda":
        echo "Início da semana.";
        break;
    case "terça":
        echo "Dia de estudos.";
        break;
    case "sexta":
        echo "Quase fim de semana!";
        break;
    default:
        echo "Dia qualquer.";
}
?>

⚠️ Operadores de Comparação
Operador Significado Exemplo
== Igual $a == $b
!= Diferente $a != $b
> Maior que $a > $b
< Menor que $a < $b>= Maior ou igual $a >= $b
    <= Menor ou igual $a <=$b===Igual e mesmo tipo $a===$b !==Diferente ou tipo diferente $a !==$b ⚙️ Operadores Lógicos
        Operador Nome Exemplo Significado && E $a> 0 && $b > 0 Verdadeiro se ambos forem verdadeiros
        ` ` OU
        ! NÃO !($a > 0) Inverte o resultado

        💡 Exemplo completo
        <?php
        $idade = 17;
        $temCarteira = false;

        if ($idade >= 18 && $temCarteira) {
            echo "Pode dirigir.";
        } elseif ($idade >= 18 && !$temCarteira) {
            echo "Você é maior, mas precisa de carteira.";
        } else {
            echo "Você não pode dirigir.";
        }
        ?>