<?php
$clasificacion['Alonso']['Valencia'] = 1;
$clasificacion['Hamilton']['Valencia'] = 4;
$clasificacion['Massa']['Valencia'] = 2;
$clasificacion['Raikonen']['Valencia'] = 3;

$clasificacion['Alonso']['China'] = 1;
$clasificacion['Hamilton']['China'] = 4;
$clasificacion['Massa']['China'] = 2;
$clasificacion['Raikonen']['China'] = 3;

$clasificacion['Alonso']['Brasil'] = 1;
$clasificacion['Hamilton']['Brasil'] = 4;
$clasificacion['Massa']['Brasil'] = 2;
$clasificacion['Raikonen']['Brasil'] = 3;

$puntuacion = [
    1 => 10,
    2 => 8,
    3 => 7,
    4 => 6,
    5 => 4,
    6 => 3,
    7 => 2,
    8 => 1,
];

$puntos_finales = [];

foreach ($clasificacion as $piloto => $carreras) {
    $puntos_finales[$piloto] = 0;
    foreach ($carreras as $carrera => $posicion) {
        $puntos_finales[$piloto] += isset($puntuacion[$posicion]) ? $puntuacion[$posicion] : 0;
    }
}

arsort($puntos_finales);

echo "<h1>Clasificación del mundial de Fórmula 1:</h1>";
foreach ($puntos_finales as $piloto => $puntos) {
    echo "<b>$piloto</b> = $puntos puntos <br>"; 
}
?>