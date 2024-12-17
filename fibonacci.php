<?php
// Función para generar los primeros n términos de la serie Fibonacci
function generarFibonacci($n) {
    // Validación: n debe ser mayor a cero
    if ($n <= 0) {
        return []; // Retorna un array vacío si n es inválido
    }
    
    $fibonacci = [0, 1]; // La serie comienza con 0 y 1
    for ($i = 2; $i < $n; $i++) {
        // Cada término es la suma de los dos anteriores
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return array_slice($fibonacci, 0, $n); // Retorna los primeros n términos
}

// Ejemplo de uso
echo "Serie Fibonacci (n=10): " . implode(", ", generarFibonacci(10)) . "\n";
?>
