<?php
    $dias_semana = array("Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado");

    $dia = date("w");

    $fecha_actual = date("d - m - Y");

    $nombre_dia = $dias_semana[$dia];

    $fecha_dos_meses_mas = date("d \d\e F \d\e Y", strtotime("+2 months"));

    echo "Día de la semana: " . $nombre_dia . "<br>";
    echo "Fecha actual: " . $fecha_actual . "<br>";

    echo "Fecha 2 meses posterior: " . $fecha_dos_meses_mas;
?>