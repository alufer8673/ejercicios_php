<?php
 
        $num=rand(1,100);
        if ($num < 50){
                echo "$num es menor a 50";
        }elseif($num == 50){
                echo "$num es igual a 50";
        }else{
                echo "$num es mayor a 50";
        }
?>