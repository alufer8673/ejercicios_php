<!DOCTYPE html>
<html>
<head>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
    <title>Ejercicio3</title>
</head>
<body>
    <h1> Ejercicio1</h1>
    <br>
    El resultado de la consulta es:
    <br>

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

$sql = "SELECT DISTINCT * FROM club WHERE num > '500'";

if ($resultado = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $datos[] = $row;
    }
    mysqli_free_result($resultado);
}
echo '<table cellpadding="0" cellspacing="0">';
echo '<tr><td><strong>NOMBRE</strong></td><td><strong>SEDE</strong></td></tr>';
foreach ($datos as $registro) {
    echo '<tr><td>' . $registro["nombre"] . '</td><td>' . $registro["sede"] . '</td></tr>';
}
echo '</table>';
mysqli_close($conn);
?>
</body>
</html>