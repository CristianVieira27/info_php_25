<!-- 🧠 O que é um palíndromo?
É uma palavra ou frase que lê igual de trás pra frente, como:

"ana"

"radar"

"arara"

✅ Exemplo simples em PHP
<?php
$palavra = "arara";

// Remove espaços e deixa tudo minúsculo
$palavraFormatada = strtolower(str_replace(" ", "", $palavra));

// Inverte a palavra
$inversa = strrev($palavraFormatada);

// Verifica se é palíndromo
if ($palavraFormatada == $inversa) {
    echo "$palavra é um palíndromo.";
} else {
    echo "$palavra não é um palíndromo.";
}
?>

💡 Explicando passo a passo:
strtolower() → deixa tudo minúsculo.

str_replace(" ", "", ...) → remove espaços.

strrev() → inverte a string.

🧾 Exemplo com formulário (HTML + PHP)
<?php

$resultado = "";

if (isset($_POST["texto"])) {
    $texto = $_POST["texto"];
    $limpo = strtolower(str_replace(" ", "", $texto));
    $invertido = strrev($limpo);

    if ($limpo == $invertido) {
        $resultado = "É um palíndromo!";
    } else {
        $resultado = "Não é um palíndromo.";
    }
}
?>

<form method="POST">
    Digite uma palavra: <input type="text" name="texto">
    <input type="submit" value="Verificar">
</form>

<p><?php echo $resultado; ?></p> -->