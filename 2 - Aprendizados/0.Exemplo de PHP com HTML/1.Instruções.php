<!-- 📌 O que é PHP com HTML?
Você pode misturar HTML (estrutura da página) com PHP (lógica do programa) no mesmo arquivo. Isso permite criar páginas
interativas e inteligentes.

📄 Estrutura básica
<!DOCTYPE html>
<html>

<head>
    <title>Minha Página PHP</title>
</head>

<body>

    <h1>Bem-vindo!</h1>

    <?php
    echo "<p>Hoje é " . date("d/m/Y") . "</p>";
    ?>

</body>

</html>

➡️ O PHP fica entre <?php ?>, e o restante é HTML normal.

🧾 Exemplo: Mostrar nome digitado pelo usuário
1. HTML com formulário:
<form method="POST" action="receber.php">
    Nome: <input type="text" name="nome"><br>
    <input type="submit" value="Enviar">
</form>

2. Arquivo receber.php:
<?php
$nome = $_POST["nome"];
echo "<h2>Olá, $nome!</h2>";
?>

🧪 Exemplo completo: PHP + HTML no mesmo arquivo
<?php
$mensagem = "";

if (isset($_POST["nome"])) {
    $nome = $_POST["nome"];
    $mensagem = "Olá, $nome!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Exemplo com PHP e HTML</title>
</head>

<body>

    <form method="POST">
        Digite seu nome: <input type="text" name="nome">
        <input type="submit" value="Enviar">
    </form>

    <p><?php echo $mensagem; ?></p>

</body>

</html>

📥 Métodos GET e POST
Método Onde os dados aparecem? Uso comum
GET Na URL Pesquisas, filtros
POST Oculto na requisição Formulários, login

🔄 PHP gerando HTML dinamicamente
<?php
$nomes = ["Ana", "Bruno", "Carlos"];
?>

<ul>
    <?php
    foreach ($nomes as $nome) {
        echo "<li>$nome</li>";
    }
    ?>
</ul> -->