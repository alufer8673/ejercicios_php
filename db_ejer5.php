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

$sql = "SELECT artista.nombre as nombre_artista 
        FROM artista 
        JOIN pertenece ON artista.dni = pertenece.dni 
        JOIN grupo ON pertenece.cod = grupo.cod 
        WHERE grupo.pais = 'España'";

if ($resultado = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $datos[] = $row;
    }
    mysqli_free_result($resultado);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Ejercicio5</title>
    <style>
        table {margin-top:30px;}
        td {border:1px solid blue;}
    </style>
</head>
<body>
    <h1> Ejercicio 5</h1>
    <p>El resultado de la consulta es:</p>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <td><strong>NOMBRE ARTISTA</strong></td>
        </tr>

        <?php foreach ($datos as $registro): ?>
            <tr>
                <td><?php echo $registro["nombre_artista"]; ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>

<?php
mysqli_close($conn);
?>