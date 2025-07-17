<?php

$array_numeros = array(2,4,5);

function sumaPares ($array_valores){
    $suma = 0;
    for($i = 0; $i < 5; $i++){
        if($array_valores[$i] % 2 == 0){
            $suma += $array_valores[$i];
        }
    }
    
    return $suma;
}
echo "El arrat es el siguiente: ";
echo "<pre>";
print_r($array_numeros);
echo "</pre>";
echo "la suma del array es: ". sumaPares($array_numeros);