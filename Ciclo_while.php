<?php
#Ciclo While

$tabla = readline("Digite la tabla de multiplicar que desea usar: ");
$i =0;
while ($i <= 10) {
    echo    $tabla ." X ". $i ." = ". ($i * $tabla). "\n";
    
    #siempre debe llevar un contador
    $i++;
}