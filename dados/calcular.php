<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO DA SOMA</title>
</head>
<body>
    <h1>Aqui está sua soma</h1>
    <p>
        <?php 
            $n1 = floatval($_POST["n1"]);
            $n2 = floatval($_POST["n2"]);
            $r = ($n1 + $n2);

            echo "A soma $n1 + $n2 resulta em $r"
        ?>
    </p>
</body>
</html>