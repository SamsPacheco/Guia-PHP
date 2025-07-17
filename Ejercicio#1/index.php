<?php

function generarFibonacci($n) {
    $fibonacci = [];

    if ($n <= 0) {
        return $fibonacci; 
    }else if($n == 1){
        $fibonacci[] = 0;
        return $fibonacci;
    }
    // Primer término
    $fibonacci[] = 0;
    // Segundo término
    $fibonacci[] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

//variable a asignarle un valor, mayor a 1 
$n = 20;
$resultado = generarFibonacci($n);

// Imprimir los términos
echo "Serie Fibonacci de $n términos: ";
echo implode(", ", $resultado);

?>
