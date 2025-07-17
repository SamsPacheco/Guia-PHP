<?php
    function esPalindromo($palabra){
        $miPalabra = strtolower($palabra);
        $palabraPalindroma = "";
        $esPalindromo = false;

        for($i = strlen($palabra) -1; $i >= 0; $i--){
            $palabraPalindroma .= $miPalabra[$i];
        }

        if($miPalabra == $palabraPalindroma){
            $esPalindromo = true;
        }
        return $esPalindromo ? "Es palíndromo": "No es palíndromo";
    }


    echo esPalindromo("oso");
?>