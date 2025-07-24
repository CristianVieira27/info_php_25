🔁 PRINCIPAIS ESTRUTURAS DE REPETIÇÃO EM PHP
🔹 1. while
Repete enquanto a condição for verdadeira.
<?php
$contador = 1;

while ($contador <= 5) {
    echo "Número: $contador <br>";
    $contador++;
}
?>

🔹 2. do...while
Executa o bloco pelo menos uma vez, e depois repete enquanto a condição for verdadeira.
<?php
$contador = 1;

do {
    echo "Número: $contador <br>";
    $contador++;
} while ($contador <= 5);
?>

🔹 3. for
Ideal quando você sabe exatamente quantas vezes vai repetir.
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Contando: $i <br>";
}
?>

🔹 4. foreach
Usado para percorrer arrays, item por item.
<?php
$cores = array("Vermelho", "Verde", "Azul");

foreach ($cores as $cor) {
    echo "Cor: $cor <br>";
}
?>

Com array associativo:
<?php
$pessoas = array("Ana" => 20, "Carlos" => 25);

foreach ($pessoas as $nome => $idade) {
    echo "$nome tem $idade anos<br>";
}
?>

💡 DIFERENÇAS ENTRE OS LOOPS
Tipo Melhor para...
while Repetições com condição no início
do...while Garantir que execute pelo menos 1 vez
for Repetições com contador fixo
foreach Percorrer arrays de forma simples

⚠️ Comandos extras
break; → Encerra o loop imediatamente.

continue; → Pula para a próxima repetição do loop.

🧪 Exemplo com for e if
<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "$i é par<br>";
    } else {
        echo "$i é ímpar<br>";
    }
}
?>