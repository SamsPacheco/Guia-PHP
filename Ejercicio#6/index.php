<?php
function fizzBuzz($n) {
    $respuesta = [];

    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            array_push($respuesta, "FizzBuzz");
        } elseif ($i % 3 == 0) {
            array_push($respuesta, "Fizz");
        } elseif ($i % 5 == 0) {
            array_push($respuesta, "Buzz");
        } else {
            array_push($respuesta, strval($i));
 ; 
        }
    }

    return $respuesta;
}

// Probar con n = 15
$resultado = fizzBuzz(15);
echo implode(", ", $resultado);
?>
