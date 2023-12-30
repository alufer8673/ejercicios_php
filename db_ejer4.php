<!DOCTYPE html>
<html>
<head>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
    <title>Ejercicio4</title>
</head>
<body>
    <h1> Ejercicio4</h1>
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

$sql = "SELECT club.nombre AS nombre_club, club.sede, grupo.nombre AS nombre_grupo FROM club JOIN grupo ON club.cod_gru = grupo.cod
        WHERE grupo.pais = 'España'";

if ($resultado = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $datos[] = $row;
    }
    mysqli_free_result($resultado);
}
echo '<table cellpadding="0" cellspacing="0">';
echo '<tr><td><strong>NOMBRE CLUB</strong></td><td><strong>SEDE</strong></td><td><strong>NOMBRE GRUPO</strong></td></tr>';
foreach ($datos as $registro) {
    echo '<tr><td>' . $registro["nombre_club"] . '</td><td>' . $registro["sede"] . '</td><td>' . $registro["nombre_grupo"] . '</td></tr>';
}
echo '</table>';
mysqli_close($conn);
?>
</body>
</html>