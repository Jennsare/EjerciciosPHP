<?php
// Función para determinar si un número es primo
function esPrimo($numero) {
    
    // Validación: los números menores que 2 no son primos
    if ($numero < 2) {
        return false;
    }

    // Verifica divisibilidad desde 2 hasta la raíz cuadrada del número
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false; // Si es divisible, no es primo
        }
    }
    return true; // Si no se encuentra divisor, es primo
}

// Ejemplo de uso
echo "¿Es primo 17? " . (esPrimo(17) ? "Sí" : "No") . "\n";
echo "¿Es primo 20? " . (esPrimo(20) ? "Sí" : "No") . "\n";
?>
