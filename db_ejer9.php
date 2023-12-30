<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio9</title>
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
$nombreArtista1 = "Aitana Ocaña";
$nombreArtista2 = "Annuel Doble A";
$dniArtista1 = "26600862";
$dniArtista2 = "20920089";

$queryVerificar = "SELECT dni FROM artista WHERE dni IN ('$dniArtista1', '$dniArtista2')";
$resultadoVerificar = mysqli_query($conn, $queryVerificar);

if (mysqli_num_rows($resultadoVerificar) > 0) {
    echo '<p>Error al insertar los artistas: DNI duplicado</p>';
} else {
    $queryInsertar = "INSERT INTO artista (dni, nombre) VALUES ('$dniArtista1', '$nombreArtista1'), ('$dniArtista2', '$nombreArtista2')";

    if (mysqli_query($conn, $queryInsertar)) {
        echo '<h1>Insertar Artistas</h1>';
        echo '<p>Artistas insertados correctamente:</p>';
        echo '<ul>';
        echo '<li>DNI: ' . $dniArtista1 . ', Nombre: ' . $nombreArtista1 . '</li>';
        echo '<li>DNI: ' . $dniArtista2 . ', Nombre: ' . $nombreArtista2 . '</li>';
        echo '</ul>';
    } else {
        echo '<p>Error al insertar los artistas: ' . mysqli_error($conn) . '</p>';
    }
}

mysqli_close($conn);

?>

</body>
</html>