<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nombre: <input type="text" name="nombre"><br>
            Edad: <input type="number" name="edad"><br>
            <input type="submit" value="Enviar">
        </form>

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
    </body>
</html>
