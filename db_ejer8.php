<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio8</title>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
</head>
<body>
<h1> Ejercicio 8</h1>
<p>El resultado de la consulta es:</p>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$server = 'mysql';
$bd = 'musica';
$usu = 'admin01';
$pass = 'hola01';
$port = '3306';
$conn = mysqli_connect($server, $usu, $pass, $bd, $port);

if (mysqli_connect_error()) {
    echo 'Error de conexión';
    exit();
}

$datos = array();

$sql = "SELECT DISTINCT c.nombre, c.dir  
        FROM companyia c  
        INNER JOIN disco d ON c.cod = d.cod_comp  
        WHERE d.nombre LIKE 'A%'";

if ($resultado = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $datos[] = $row;
    }
    mysqli_free_result($resultado);
}

echo '<table cellpadding="0" cellspacing="0">';
echo '<tr><td><strong> NOMBRE COMPAÑÍA </strong></td><td><strong> DIRECCIÓN </strong></td></tr>';

foreach ($datos as $registro) {
    echo '<tr><td>' . $registro["nombre"] . '</td><td>' . $registro["dir"] . '</td></tr>';
}

echo '</table>';

mysqli_close($conn);

?>

</body>
</html>