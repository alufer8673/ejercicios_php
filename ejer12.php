<?php
define('NUM_FILAS', 10);
define('NUM_COLUMNAS', 10);

echo "<table border='1'>";

for ($a = 1; $a <= NUM_FILAS; $a++) {
    echo "<tr";
    echo ($a % 2 == 0) ? " style='background-color: lightgray;'" : "";
    echo ">";

    for ($b = 1; $b <= NUM_COLUMNAS; $b++) {
        echo "<td>" . (($a - 1) * NUM_COLUMNAS + $b) . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>