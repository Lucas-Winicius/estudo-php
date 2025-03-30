<?php

$frase = $_GET["f"];
$vogais = 0;

echo "<h1>Vogador - Contador de vogais</h1>";

foreach (str_split($frase) as $letra) {
    if (in_array(strtolower($letra), ['a', 'e', 'i', 'o', 'u'])) {
        $vogais++;
    };
};

echo "A frase <b>\"$frase\"</b> tem <b>$vogais</b> vogais";
