<?php
/*
Contar hasta que el usuario ingrese un número negativo:
Inicializa una variable en 0.
Utiliza un ciclo while para pedir al usuario que ingrese un número.
Termina el ciclo cuando el usuario ingrese un número negativo.
*/

$n= readline("Ingrese un número: ");
$suma=0;
$i=0;
if ($n >= 0) {
    while ($n >= 0) {
        $suma=$i + $n;
        echo $suma;
        $i++;
        }   
    }



/*
$n= readline("Ingrese un número: ");

while ($n >= 0) {
    echo $n . "\n";
    $n++;
*/