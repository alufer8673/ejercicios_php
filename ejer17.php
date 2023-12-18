<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nombre = $_REQUEST['nombre'];
        $edad = $_REQUEST['edad'];
        if ($edad >= 18){
            echo "$nombre  es mayor de edad";
        }else {
            echo "$nombre es menor de edad";
        }
    }
?>