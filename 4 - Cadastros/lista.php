<?php
include("conexao.php");
$sql = "SELECT id, nome, email, cargo, departamento FROM usuarios";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="js/script.js" defer></script>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h2 class="text-center mb-4">Funcionários Cadastrados</h2>

            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Cargo</th>
                        <th>Departamento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nome'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['cargo'] . "</td>
                                <td>" . $row['departamento'] . "</td>
                                <td>
                                    <a href='excluir.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm excluir'>Excluir</a>
                                </td>
                              </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>Nenhum funcionário cadastrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>

            <div class="text-center">
                <a href="index.php" class="btn btn-secondary">Novo Cadastro</a>
            </div>
        </div>
    </div>

</body>

</html>
<?php $conn->close(); ?>