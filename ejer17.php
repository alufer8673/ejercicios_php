<html>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $nombre = $_REQUEST['nombre'];
                $edad = $_REQUEST['edad'];

                $mensaje = "";
                if ($edad >= 18){
                    $mensaje = "$nombre es mayor de edad";
                } else {
                    $mensaje = "$nombre es menor de edad";
                }
            }
// llevo 15 min
        ?>
    </body>
</html>