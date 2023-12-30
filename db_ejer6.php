<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio6</title>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
</head>
<body>

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
    echo 'Error de conexiÃ³n';
    exit();
}

$datos = array();

$sql = "SELECT DISTINCT nombre  
        FROM disco d  
        INNER JOIN esta e ON d.cod = e.cod  
        INNER JOIN cancion c ON e.can = c.cod  
        WHERE c.duracion > 5
        ORDER BY nombre ASC";

if ($resultado = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $datos[] = $row;
    }
    mysqli_free_result($resultado);
}

echo '<table cellpadding="0" cellspacing="0">';
echo '<tr><td><strong> NOMBRE DISCO </strong></td></tr>';

foreach ($datos as $registro) {
    echo '<tr><td>' . $registro["nombre"] . '</td></tr>';
}

echo '</table>';

mysqli_close($conn);

?>
</body>
</html>