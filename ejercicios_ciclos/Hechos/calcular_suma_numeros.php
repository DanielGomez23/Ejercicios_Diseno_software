<?php
/* Calcular la suma de los primeros N números:
Pide al usuario que ingrese un número N.
Utiliza un ciclo for para sumar los números del 1 al N. */


$n = readline("Ingresa un número para realizar la suma de sus derivados: ");
$suma =0;
for ($i=1; $i <= $n; $i++){ 
    $suma += $i;
}
echo $suma;
