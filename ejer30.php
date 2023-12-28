<?php
echo "El día de hoy es: " . date("d/m/Y") . "<br>";
echo  "El día de la semana es: " . date("l") . "<br>";
$nueva=mktime( 0, 0, 0, date("m") +2, date("d"), date("Y"));
echo "En dos meses la fecha será: " . date("d-F-Y",$nueva);
?>