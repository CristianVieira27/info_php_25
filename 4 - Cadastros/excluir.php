<?php
include("conexao.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: lista.php");
        exit;
    } else {
        echo "Erro ao excluir: " . $stmt->error;
    }
}
$conn->close();
