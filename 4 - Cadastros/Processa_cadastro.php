<?php
include("conexao.php");

// Receber dados do formulário
$nome            = $_POST['nome'];
$email           = $_POST['email'];
$senha           = $_POST['senha'];
$telefone        = $_POST['telefone'];
$cpf             = $_POST['cpf'];
$data_nascimento = $_POST['data_nascimento'];
$endereco        = $_POST['endereco'];
$cargo           = $_POST['cargo'];
$departamento    = $_POST['departamento'];
$data_contratacao = $_POST['data_contratacao'];

// Criptografar a senha
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);

// Inserir no banco
$sql = "INSERT INTO usuarios 
(nome, email, senha, telefone, cpf, data_nascimento, endereco, cargo, departamento, data_contratacao) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param(
    "ssssssssss",
    $nome,
    $email,
    $senhaSegura,
    $telefone,
    $cpf,
    $data_nascimento,
    $endereco,
    $cargo,
    $departamento,
    $data_contratacao
);

if ($stmt->execute()) {
    echo "Funcionário cadastrado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
