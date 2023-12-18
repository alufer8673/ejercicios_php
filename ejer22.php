<?php
    ini_set('display_errors', 1);

    ini_set('display_startup_errors', 1);
    
    error_reporting(E_ALL); 

    function crearTabla($fila,$columna) {
        $cont = 1;
        $result = "";
        $result.= "<table border=1>";
        for ($i = 1; $i <= $fila; $i++){
            $result .= "<tr>";
                for ($j = 1; $j <= $columna; $j++){
                    $result .= "<td>";
                        $result .= $cont;
                    $result .= "</td>";
                    $cont++;
                }
            $result .= "</tr>";
        }
        $result.= "</table>";
        return $result;
    }

    $tabla1 = crearTabla(2,3);
    $tabla2 = crearTabla(3,4);
    $tabla3 = crearTabla(5,6);

    echo "$tabla1 <br> $tabla2 <br> $tabla3"
?>