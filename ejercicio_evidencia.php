<?php
/*
    Hacer un algoritmo que dígitadas las notas de n estudiantes, me las clasifique en las siquientes 
    categorías: Excelente para las notas iguales o superiores a 4.0; Sobresaliente para las notas iguales
    o mayores a 3.0 y menores a 4.0; 
    Deficiente para las notas inferiores a 3.0.
*/

$n_estudiantes = readline("Digite la cantidad de estudiantes: ");
$notas_excelentes = array();
$notas_sobresalientes = array();
$notas_deficientes = array();

for ($i=1; $i <= $n_estudiantes; $i++) { 
    $nota = readline("Dígite la nota: ");

    if ($nota >= 4.0 && $nota < 5.0){
        echo "Su nota es " . $nota . " por lo cual tiene un Excelente". "\n";
        array_push($notas_excelentes,$nota);
    }
    elseif ($nota >= 3.0 && $nota < 4.0) {
        echo "Su nota es " . $nota . " por lo cual tiene un Sobresaliente". "\n";
        array_push($notas_sobresalientes,$nota);
    }
    elseif ($nota < 3.0 && $nota >= 1.0){
        echo "Su nota es " . $nota . " por lo cual tiene un Deficiente". "\n";
        array_push($notas_deficientes,$nota);
    }
    else {
        echo"La nota digita no se encuentra en el sistema de calificacion de la institucion". "\n";
        $i--;
    }
}

echo "Notas excelentes: ".($notas_excelentes) . "\n";
echo "Notas sobresalientes: ".($notas_sobresalientes) . "\n";
echo "Notas deficientes: ".($notas_deficientes) . "\n";