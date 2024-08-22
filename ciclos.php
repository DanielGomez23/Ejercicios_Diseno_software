<?php
#Ciclos

#Ciclo for

$tabla = readline("Digite la tabla de multiplicar que desea usar: ");

for( $i= 0; $i <=10; $i++){
    echo    $tabla ." X ". $i ." = ". ($i * $tabla). "\n";
}