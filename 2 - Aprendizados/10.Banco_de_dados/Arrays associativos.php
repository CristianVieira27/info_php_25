<?php

1. O que é um array associativo em PHP?

Um array associativo é aquele em que você dá nomes (chaves) aos índices:

$usuario = [
    "nome" => "Maria",
    "email" => "maria@email.com",
    "idade" => 25
];

echo $usuario["nome"]; // Maria


Isso é útil porque o array fica parecido com uma linha de banco de dados.

2. Como usar arrays associativos com o banco de dados
a) Conexão com MySQL (via PDO, que é mais moderno e seguro):
<?php
$pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
?>

b) Inserir no banco usando array associativo

Imagine que você tem uma tabela usuarios (nome, email, idade):

<?php
$usuario = [
    "nome" => "Maria",
    "email" => "maria@email.com",
    "idade" => 25
];

$sql = "INSERT INTO usuarios (nome, email, idade) VALUES (:nome, :email, :idade)";
$stmt = $pdo->prepare($sql);
$stmt->execute($usuario); // aqui o array associativo preenche os :campos


👉 O array associativo substitui os valores :nome, :email, :idade.

c) Buscar dados e receber como array associativo
$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql);

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($resultados as $linha) {
    echo $linha["nome"] . " - " . $linha["email"] . "<br>";
}


Aqui, cada linha do banco vira um array associativo.

d) Atualizar dados com array associativo
$dados = [
    "nome" => "Maria Souza",
    "email" => "maria.souza@email.com",
    "id" => 1
];

$sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute($dados);

e) Deletar dados com array associativo
$dados = ["id" => 1];

$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute($dados);


✅ Resumo da ideia:

Você monta arrays associativos em PHP com os dados que quer salvar ou atualizar.

Usa esses arrays para preencher os parâmetros :campo no SQL.

Quando lê do banco, também recebe arrays associativos (fetchAll(PDO::FETCH_ASSOC)).


?>



<?php
// ===============================
// Conexão com o banco
// ===============================
$pdo = new PDO("mysql:host=localhost;dbname=teste;charset=utf8", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ===============================
// Criar usuário (CREATE)
// ===============================
if (isset($_POST["acao"]) && $_POST["acao"] == "criar") {
    $usuario = [
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "idade" => $_POST["idade"]
    ];

    $sql = "INSERT INTO usuarios (nome, email, idade) VALUES (:nome, :email, :idade)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($usuario);

    echo "<p style='color:green'>Usuário criado com sucesso!</p>";
}

// ===============================
// Atualizar usuário (UPDATE)
// ===============================
if (isset($_POST["acao"]) && $_POST["acao"] == "atualizar") {
    $dados = [
        "id" => $_POST["id"],
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "idade" => $_POST["idade"]
    ];

    $sql = "UPDATE usuarios 
            SET nome = :nome, email = :email, idade = :idade 
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($dados);

    echo "<p style='color:blue'>Usuário atualizado!</p>";
}

// ===============================
// Deletar usuário (DELETE)
// ===============================
if (isset($_GET["delete"])) {
    $dados = ["id" => $_GET["delete"]];

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute($dados);

    echo "<p style='color:red'>Usuário deletado!</p>";
}

// ===============================
// Listar usuários (READ)
// ===============================
$sql = "SELECT * FROM usuarios";
$stmt = $pdo->query($sql);
$usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>CRUD com Arrays Associativos</title>
</head>
<body>
    <h1>CRUD com PHP + PDO</h1>

    <!-- Formulário Criar -->
    <h2>Criar Usuário</h2>
    <form method="post">
        <input type="hidden" name="acao" value="criar">
        Nome: <input type="text" name="nome" required><br>
        Email: <input type="email" name="email" required><br>
        Idade: <input type="number" name="idade" required><br>
        <button type="submit">Criar</button>
    </form>

    <!-- Lista de Usuários -->
    <h2>Usuários Cadastrados</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th><th>Nome</th><th>Email</th><th>Idade</th><th>Ações</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u["id"] ?></td>
            <td><?= $u["nome"] ?></td>
            <td><?= $u["email"] ?></td>
            <td><?= $u["idade"] ?></td>
            <td>
                <!-- Link de deletar -->
                <a href="?delete=<?= $u["id"] ?>" onclick="return confirm('Deseja realmente deletar?')">Deletar</a>

                <!-- Formulário de atualizar -->
                <form method="post" style="display:inline">
                    <input type="hidden" name="acao" value="atualizar">
                    <input type="hidden" name="id" value="<?= $u["id"] ?>">
                    <input type="text" name="nome" value="<?= $u["nome"] ?>">
                    <input type="email" name="email" value="<?= $u["email"] ?>">
                    <input type="number" name="idade" value="<?= $u["idade"] ?>">
                    <button type="submit">Atualizar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
🔑 Como funciona:
Criar → Formulário no topo (POST com ação criar).

Listar → Mostra todos os usuários cadastrados em tabela.

Atualizar → Cada linha tem um mini formulário para editar o usuário direto na tabela.

Deletar → Cada linha tem um link para remover o usuário.

👉 Tudo feito com arrays associativos (["campo" => valor]) preenchendo os :campos do SQL.