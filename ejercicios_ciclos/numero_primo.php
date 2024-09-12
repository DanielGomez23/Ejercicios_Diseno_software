<?php
/*
Determinar si un número es primo:
Pide al usuario que ingrese un número.
Utiliza un ciclo while para verificar si el número es divisible por algún número menor que él mismo.
*/

$n= readline("Ingresa un numero para verificar si es primo: ");
$i=0;

while ($n >= $n) {
    if ($n % 2 ==0  and $n != 2) {
        echo $n. "no es un numero primo";
        $i++;
        exit;
    }
    else {
        echo $n. "es un numero primo";
        exit;
    }

}