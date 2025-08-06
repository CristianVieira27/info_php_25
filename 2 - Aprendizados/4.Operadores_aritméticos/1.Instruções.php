➕➖✖️➗ Operadores Aritméticos em PHP
Operador Nome Exemplo Resultado
+ Soma $a + $b Soma os valores
- Subtração $a - $b Subtrai
* Multiplicação $a * $b Multiplica
/ Divisão $a / $b Divide
% Módulo (resto) $a % $b Resto da divisão
** Exponenciação $a ** $b Potência

✅ Exemplos simples
<?php
$a = 10;
$b = 3;

echo "Soma: " . ($a + $b) . "<br>";
echo "Subtração: " . ($a - $b) . "<br>";
echo "Multiplicação: " . ($a * $b) . "<br>";
echo "Divisão: " . ($a / $b) . "<br>";
echo "Módulo: " . ($a % $b) . "<br>";
echo "Potência: " . ($a ** $b) . "<br>";
?>

🧮 Exemplo com HTML + PHP (calculadora simples)
<?php
$resultado = "";

if (isset($_POST["n1"]) && isset($_POST["n2"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $resultado = "Soma: " . ($n1 + $n2);
}
?>

<form method="POST">
    Número 1: <input type="number" name="n1"><br>
    Número 2: <input type="number" name="n2"><br>
    <input type="submit" value="Calcular">
</form>

<p><?php echo $resultado; ?></p>

🧠 Dica: Ordem de operações (como na matemática)
Parênteses ()

Exponenciação **

Multiplicação/Divisão *, /, %

Soma/Subtração +, -