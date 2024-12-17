<?php
// Función para determinar si una cadena es un palíndromo
function esPalindromo($texto) {
    
    // Limpia el texto eliminando espacios y convirtiendo a minúsculas
    $textoLimpio = strtolower(preg_replace('/\s+/', '', $texto));
    
    // Compara el texto limpio con su reverso
    return $textoLimpio === strrev($textoLimpio);
}

// Ejemplo de uso
echo "¿Es 'Anita lava la tina' un palíndromo? " . (esPalindromo("Anita lava la tina") ? "Sí" : "No") . "\n";
echo "¿Es 'Hola Mundo' un palíndromo? " . (esPalindromo("Hola Mundo") ? "Sí" : "No") . "\n";
?>
