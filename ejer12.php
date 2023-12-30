<?php
    echo "<table border=1>";

    $num = 1;

    for ($i = 1; $i <= 10; $i++){
        $modulo = $i  % 2;

        if ($modulo == 0 ){
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++){
                echo "<td bgcolor=\"gray\">$num</td>";
                $num++;
            }
            echo "</tr>";
        }else{
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++){
                echo "<td>$num</td>";
                $num++;
            }
            echo "</tr>";
        }

    }

    echo "</table";
?>