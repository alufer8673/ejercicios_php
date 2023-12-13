<?php
    $pares = array();
    $num = 2;
    for ($x=1; $x <= 10; $x++){
        $pares[$x] = $num;
        $num += 2;
    }
    foreach($pares as $x => $x_num){
        echo $x_num;
        echo "<br>";
    }
?>