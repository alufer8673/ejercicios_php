<?php
    echo "<table border=1>";
    for ($i = 1; $i <= 4; $i++){
        echo "<tr>";
        for ($j = 1; $j <= 4; $j++){
            echo "<td>";
            $potencia = pow($i,$j);
            echo $potencia;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>