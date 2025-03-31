<?php

$l_numbers = "1234567890";
$l_letters = "abcdefghijklmnopqrstuvwxyz";
$l_caracters = "-_.$@";

$numbers = $_GET["numbers"] === 'on';
$caracters = $_GET["caracters"] === 'on';
$letters = $_GET["letters"] === 'on';
$size = intval($_GET["size"]) | 12;
$pass = array();

$finalList = "";

if ($numbers) {
    $finalList = $finalList . $l_numbers;
}

if ($caracters) {
    $finalList = $finalList . $l_caracters;
}

if ($letters) {
    $finalList = $finalList . $l_letters;
}

for ($i = 0; $i <= $size; $i++) {
    $n = rand(0, count(str_split($finalList)) - 1);
    $pass[$i] = $finalList[$n];
}



$pass = implode($pass);

?>

<form class="d-flex flex-column align-middle w-25 gap-3">
    <div class="form-group">
        <input type="checkbox" name="numbers" id="numbers">
        <label for="numbers">Com numeros</label>
    </div>
    <div class="form-group">
        <input type="checkbox" name="caracters" id="caracters">
        <label for="caracters">Com simbolos</label>
    </div>
    <div class="form-group">
        <input type="checkbox" name="letters" id="letters">
        <label for="letters">Com letras</label>
    </div>
    <input type="number" name="size">
    <button type="submit" class="btn btn-success">Gerar</button>
</form>

<?php

if ($pass) {
    echo "<h1>Aqui está sua senha</h1>";
    echo $pass;
}

?>