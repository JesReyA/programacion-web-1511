<?php
// Datos necesarios

// DB datos
// IP?
// user?
// pass ?
// Host||ip||dns?
// name db?
// puerto ?

$host = 'localhost:3306';
$user = 'root';
$pass = '1973852460*';
$dbName = 'crud_app';

//crea un objeto para crear la conexion

//NO ES UNA BUENA FORMA DE CREAR UNA CONEXION, PERO ES LA FORMA MAS SENCILLA DE HACERLO
$conexion = new mysqli($host, $user, $pass, $dbName);
if($conexion->connect_error) {
    die("Error de conexion: " . $conexion->connect_error);
}else{
    echo "<h1>Conexion exitosa</h1>";
}
?>