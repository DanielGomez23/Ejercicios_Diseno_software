<?php
/*
Imprimir una tabla de multiplicar:
pide al usuario que ingrese un numero
utiliza un ciclo for para imprimir la tabla de multiplicar de ese numero (del 1 al 10)
*/

$tabla = readline("Digite la tabla de multiplicar que desea usar: ");

for( $i= 0; $i <=10; $i++){
    echo $tabla ." X ". $i ." = ". ($i * $tabla). "\n";
}