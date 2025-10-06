<?= $palavra = "Sucesso" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"Minha página em PHP." </title>
</head>

<body>
    <h1><?= "Aprendendo PHP com a prática!<br>" . $palavra ?>
        <p> botando os aprendizados em prática.</p>
        <?php

        echo "Hoje é " . date("d/m/Y") . "<br>";

        ?>

</body>

</html>