🧩 Funções em PHP
🛠️ O que é uma função?
Uma função é um bloco de código com um nome, que pode ser executado sempre que você precisar.

🧾 Sintaxe de uma função:
function nomeDaFuncao() {
// código a ser executado
}

▶️ Chamando (executando) a função:
nomeDaFuncao();
🧪 Exemplo simples:
<?php
function saudacao()
{
    echo "Olá, seja bem-vindo(a)!";
}

saudacao(); // chama a função
?>

📦 Funções com parâmetros (entradas)
<?php
function apresentarPessoa($nome, $idade)
{
    echo "Nome: $nome <br>";
    echo "Idade: $idade anos <br>";
}

apresentarPessoa("Cris", 25);
?>

Você pode passar quantos parâmetros quiser, separados por vírgula.

🔄 Funções com retorno (return)
<?php
function soma($a, $b)
{
    return $a + $b;
}

$resultado = soma(5, 3);
echo "Resultado: $resultado";
?>

O return devolve um valor para quem chamou a função.