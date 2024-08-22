<?php
// Leer el número de notas
$n = intval(readline("Ingrese el número de notas: "));

if ($n <= 0) {
    echo "Número de notas debe ser mayor que 0.\n";
    exit;
}

$notas = array();

// Leer las notas
for ($i = 0; $i < $n; $i++) {
    $nota = floatval(readline("Ingrese la nota " . ($i + 1) . ": "));
    $notas[] = $nota;
}

// Inicializar variables
$nota_mayor = $notas[0];
$nota_menor = $notas[0];
$suma_notas = 0;

// Calcular nota mayor, nota menor y suma de notas
for ($i = 0; $i < $n; $i++) {
    $nota = $notas[$i];
    if ($nota > $nota_mayor) {
        $nota_mayor = $nota;
    }
    if ($nota < $nota_menor) {
        $nota_menor = $nota;
    }
    $suma_notas += $nota;
}

// Calcular promedio
$promedio = $suma_notas / $n;

// Imprimir resultados
echo "Nota mayor: " . $nota_mayor . "\n";
echo "Nota menor: " . $nota_menor . "\n";
echo "Promedio de notas: " . $promedio . "\n";

// Determinar quien ganó y quien perdió
$quien_gano = array_search($nota_mayor, $notas) + 1; // Asumiendo que la lista es 1-indexada
$quien_perdio = array_search($nota_menor, $notas) + 1;

echo "Estudiante que ganó: Estudiante " . $quien_gano . "\n";
echo "Estudiante que perdió: Estudiante " . $quien_perdio . "\n";
