<?php

$num = $_GET["num"];

echo "<h1>Tabuada do $num</h1>";

for ($i = 0; $i <= 10; $i++) {
    echo "$num x $I = " . ( $i * $num ) . "<br>";
}