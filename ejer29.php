<?php
$fecha = date('d - m - Y');

$nombre_dia_ingles = strftime('%A');
$nombre_dia_espanol = [
    'Monday'    => 'lunes',
    'Tuesday'   => 'martes',
    'Wednesday' => 'miércoles',
    'Thursday'  => 'jueves',
    'Friday'    => 'viernes',
    'Saturday'  => 'sábado',
    'Sunday'    => 'domingo',
];

$nombre_dia = $nombre_dia_espanol[$nombre_dia_ingles];

echo "<b>Fecha actual:</b> $nombre_dia $fecha";
?>
