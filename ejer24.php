<?php
    $var = "e-e-r-s-f-e";
    $var = str_replace('e', 'marmota', $var);
    $array = explode('-', $var);
    rsort($array);
    echo implode(' ,', $array);
?>