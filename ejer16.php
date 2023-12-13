<?php
    $dias = array( " ", 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    $comidas = array( " ", 'Desayuno', 'Comida', 'Cena');
    $comidas_lower = array( " ", 'desayuno', 'comida', 'cena');

    echo "<table border=1>";
        
    for ($i = 0; $i < 4; $i++){
        echo "<tr>";
        for ($j = 0; $j <= 7; $j++){
            echo "<td>";
                if ($i == 0){
                    echo "<b>$dias[$j]</b>";
                }else{
                    if ($j == 0){
                        echo $comidas[$i];
                    }else{
                        echo $comidas_lower[$i] . " " .  "$j";
                    }
                }
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>