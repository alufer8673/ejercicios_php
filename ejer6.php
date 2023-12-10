<?php
    $dia_ingles = date ('D');

    if ($dia_ingles == 'Mon'){
        $dia_español = "Lunes";
    }elseif ($dia_ingles == 'Tue'){
        $dia_español = "Martes";
    }elseif ($dia_ingles == 'Wen'){
        $dia_español = "Miércoles";
    }elseif ($dia_ingles == 'Thu'){
        $dia_español = "Jueves";
    }elseif ($dia_ingles == 'Fri'){
        $dia_español = "Viernes";
    }elseif ($dia_ingles == 'Sat'){
        $dia_español = "Sábado";
    }elseif ($dia_ingles == 'Sun'){
        $dia_español = "Domingo";
    }else {
        $dia_español = "Día no válido";
    }

    echo "El día de la semana es: $dia_español";
?>