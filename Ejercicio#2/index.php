<?php
function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

// Ejemplo de uso:
$numero = 7;
if (esPrimo($numero)) {
    echo "$numero es primo";
} else {
    echo "$numero no es primo";
}
?>
