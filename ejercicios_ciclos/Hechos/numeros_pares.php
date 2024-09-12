<?php
/*
Imprimir los números pares del 1 al 20:
Utiliza un ciclo for para recorrer los números del 1 al 20.
Imprime solo los números que sean divisibles por
*/

for ($i=1; $i <= 20; $i++) { 
    if ($i%2== 0) {
        echo $i . "\n"; 
}
}

