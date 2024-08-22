<?php
#Realizar un algoritmo que digitados 3 numeros me halle el numero mayor y el numero menor
$numero1 = 0;
$numero2 = 0;
$numero3 = 0;

$numero1 = readline("Digite el primer numero: ");
$numero2 = readline("Digite el segundo numero: ");
$numero3 = readline("Digite el tercer numero: ");

if ($numero1 > $numero2 and $numero1 > $numero3) {
    echo "El ". $numero1 . " es el numero mayor"."\n";
}
else if ($numero1 < $numero2 and $numero1 < $numero3) {
    echo "El ". $numero1 . " es el numero menor"."\n";
}

if ($numero2 > $numero1 and $numero2 > $numero3) {
    echo "El ". $numero2 . " es el numero mayor"."\n";
}
else if ($numero2 < $numero1 and $numero2 < $numero3) {
    echo "El ". $numero2 . " es el numero menor"."\n";
}

if ($numero3 > $numero1 and $numero3 > $numero2) {
    echo "El ". $numero3 . " es el numero mayor"."\n";
}
else if ($numero3 < $numero1 and $numero3 < $numero2) {
    echo "El ". $numero3 . " es el numero menor"."\n";
}
