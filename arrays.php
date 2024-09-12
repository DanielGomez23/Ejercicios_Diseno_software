<?php

//array_push sirve para llenar el arreglo
    $notas = array();
    $cantidad_notas = readline("Ingresa la cantidad de notas: ");
    $si = 0;
    while ($si < $cantidad_notas) {
        $nota = readline("Ingresa la nota");
        array_push($notas,$nota);
        $si++;
    }

    // $j = 0;
    $acumulador_suma = 0;
    // while ($j < count($notas)) {
    //     $acumulador_suma += $notas[$j];
    //     $j++;
    // }

    foreach ($notas as $nota) {
        $acumulador_suma += $nota;
    }

echo "La suma de las notas es: ". $acumulador_suma;
echo "El promedio de las notas es: ". $acumulador_suma / $cantidad_notas;


// Arreglos

//Declarar un arreglo 


$personas = array("Fabian","Cristia" ,"Karen");
$i = 0;
//conunt: Me da la longitud del arreglo
while ($i < count($personas)){
    print ($personas[$i] . "\n");
    $i++;
}

//con ciclo for

for ($i = 0; $i < count($personas); $i++){
    print ($personas[$i] . "\n");
}