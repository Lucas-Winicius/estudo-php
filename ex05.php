<?php

$peso = intval($_GET["p"]);
$altura = floatval($_GET["a"]);

$imc = $peso / ($altura ** 2);

echo "Seu IMC é de " . number_format($imc, 2) . " sua classificação é ";

if ($imc <= 18.5) {
    echo "Baixo Peso";
} elseif ($imc <= 24.9) {
    echo "Peso normal";
} elseif ($imc <= 29.9) {
    echo "Sobrepeso";
} elseif ($imc <= 34.9) {
    echo "Obesidade grau I";
} elseif ($imc <= 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
};