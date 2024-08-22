<?php
#Entradas
$estudiantes = 0;
$notaMayor = 0;
$notaMenor = 5;
$sumaNotas = 0;
$contador = 0;

$estudiantes = readline("Ingrese el numero de estudiantes: ");
#Proceso
for($i = 0; $i < $estudiantes; $i++){
    $notas = readline("Ingresa las notas del estudiante ". ($i+1) ." :");

    if($notas > $notaMayor){
        $notaMayor = $notas;
    }    
    
    if($notaMenor < $notas){
        $notaMenor = $notas;
    }

    $sumaNotas += $notas;
    $contador += 1;
}
#Salidas
if($notaMayor >= 3.5){
    echo"Nota mayor aprobada"."\n";
}
else{
    echo "Nota mayor reprobada"."\n";
}
if($notaMenor < 3.5){
    echo"Nota menor aprobada"."\n";
}
else{
    echo "Nota menor reprobada"."\n";
}

echo"La nota mayor es: ". $notaMayor."\n";
echo"La nota mayor es: ". $notaMenor."\n";
echo "El promedio de las notas es: ". $sumaNotas / $contador ."\n";