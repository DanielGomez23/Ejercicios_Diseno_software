<?php
/*$n1= readline("Dame un numero para sumar: ");
$n2= readline("Dame otro numero para sumar: ");
echo $n1 + $n2 . "\n";



$n1= readline("Dame un numero para restar: ");
$n2= readline("Dame otro numero para restar: ");
echo $n1 - $n2 . "\n";


$n1= readline("Dame un numero para multiplicar: ");
$n2= readline("Dame otro numero para multiplicar: ");
echo $n1 * $n2 . "\n";


$n1= readline("Dame un numero para dividir: ");
$n2= readline("Dame otro numero para divir: ");
echo $n1 / $n2 . "\n";


// FUNCIONES

function saludar($nombre){
    return "Buenos días". $nombre;
}

echo  "El saludo es: " . saludar("Daniel");

*/

$numero1= readline("Dame un numero para operar: ");
$numero2= readline("Dame otro numero para operar: ");
$opera= readline("Ingrese la operacion a realizar: ");

function operaciones($n1, $n2, $operacion) {
    if ($operacion == "+" || $operacion == "suma") {
        return $n1 + $n2;
    }
    elseif ($operacion == "-" || $operacion == "resta") {
        return $n1 - $n2;
    }
    elseif ($operacion == "*" || $operacion == "multiplicar") {
        return $n1 * $n2;
    }
    elseif ($operacion == "/" || $operacion == "dividir") {
        return $n1 / $n2;
    }
}
echo"El resultado es: " . operaciones($numero1, $numero2, $opera) ."\n";