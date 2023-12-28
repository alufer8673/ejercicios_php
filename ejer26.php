<?php
    $var = "e-e-r-s-f-e";
    $var = str_replace('e', 'marmota', $var);
    $array = explode('-', $var);
    rsort($array);

    $array_2 = array();
    foreach ($array as $valor) {
        if (strpos($valor, 'a') === false) {
            $array_2[] = $valor;
        }
    }

    echo "Dimensión del último array: " . count($array_2);
?>
