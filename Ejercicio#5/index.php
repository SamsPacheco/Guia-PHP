<?php
function calcularCostoLlamada($clave, $minutos) {
    $precioMinuto = 0;

    switch ($clave) {
        case 12:
            $precioMinuto = 2.00;
            break;
        case 15:
            $precioMinuto = 2.20;
            break;
        case 18:
            $precioMinuto = 4.50;
            break;
        case 19:
            $precioMinuto = 3.50;
            break;
        case 23:
            $precioMinuto = 6.00;
            break;
        case 25:
            $precioMinuto = 6.00;
            break;
        case 29:
            $precioMinuto = 5.00;
            break;
        default:
            return "Clave inválida";
    }

    $costo = $precioMinuto * $minutos;

    
    if ($minutos < 30) {
        $costo *= 0.90;
    }

    return "Costo total de la llamada: $" . number_format($costo, 2);
}

// Ejemplo de uso:
echo calcularCostoLlamada(15, 25); // Llamada a América Central por 25 minutos
?>
