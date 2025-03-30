<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuario criado</title>
</head>

<body>
    <?php include "../components/navbar.php" ?>
    <h1>Usuario criado com sucesso!</h1>

    <?php

    $email = $_POST["email"];
    $password = $_POST["pass"];
    $accept = $_POST["check"];

    echo "<p>Seja bem-vindo(a) $email,  para acessar o sistema digite o seu email seguido da senha $password</p>";

    if ($accept !== 'on') {
        echo "<b>Lembre-se de aceitar nossos termos</b>";
    }

    ?>
</body>

</html>