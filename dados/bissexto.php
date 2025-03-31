<form>
    <input type="number" name="ano" placeholder="Ano">
    <button type="submit" class="btn btn-primary">Ver</button>
</form>

<?php

$ano = intval($_GET["ano"]);

if ($ano % 4 === 0 && $ano % 100 !== 0) {
    echo "<h1>O ano de $ano é bissexto</h1>";
} else {
    echo "<h1>O ano de $ano não é bissexto</h1>";
}
