<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Estudando php</title>
</head>

<body class="d-flex flex-column justify-content-center justify-content-center">
    <?php include "./components/navbar.php" ?>
    <h1 class="text-center">Formularios</h1>

    <div class="d-flex justify-content-center">
        <form class="w-75 my-5" action="./dados/enviar.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
                <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <h1 class="text-center">Calculadora</h1>

    <div class="d-flex justify-content-center gap-5 align-middle ">
        <form class="w-75 my-5 d-flex justify-content-center gap-5 align-middle " action="./dados/calcular.php" method="post">
            <input type="text" name="n1" placeholder="numero1">
            <p>+</p>
            <input type="text" name="n2" placeholder="numero2">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>




        <div class="m-auto">
            <h1>Senhador - Gerador de senhas</h1>
            <?php include "./dados/senhas.php" ?>
        </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>