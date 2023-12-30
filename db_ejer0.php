<!DOCTYPE html>
<html>
    <head>
        <style>
            table {margin-top:30px;}
            td {border:1px solid blue;}
        </style>
    </head>
    </body>

        <h1>Ejercicio 1</h1>
        <p>El resultado de la columna es:</p>
        <?php
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);

            $server='lamp-docker-mysql-1';
            $bd='musica';
            $usu='admin01';
            $pass='hola01';
            $port='3306';
            $conn=mysqli_connect($server,$usu,$pass,$bd,$port);

            if (mysqli_connect_error()){
                echo 'error de conexion';
                exit();
            }
            $datos=array();
            $sql="SELECT nombre FROM grupo WHERE pais <> 'España'";
            if ($resultado = mysqli_query($conn, $sql)) {
                while ($row = mysqli_fetch_assoc($resultado)) {
                    $datos[]=$row;
                }
                mysqli_free_result($resultado);
            }
            echo '<table celpadding="0" cellspacing="0">';
            echo '<tr><td><strong>NOMBRE</strong></td></tr>';
            foreach($datos as $registro){
                echo '<tr><td>' . $registro["nombre"] . '</td></tr>';
            }
            echo '</table>';
            mysqli_close($conn);
        ?>
    </body>
</html>