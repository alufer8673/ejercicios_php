<html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Número del DNI: <input type="text" name="DNI"><br>
            <input type="submit" value="ENVIAR">
        </form>

        <?php
            function calcularLetra($numero_dni){
                $letras = "TRWAGMYFPDXBNJZSQVHLCKEW";
                $posicion = $numero_dni % 23;
                $letra = $letras[$posicion];
                return $letra;
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $numero_dni = $_POST['DNI'];
                
                $letra_nif = calcularLetra($numero_dni);
                echo "El NIF completo es: " . $numero_dni . $letra_nif;
            }
        ?>
    </body>
</html>