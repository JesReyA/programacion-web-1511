<?php
    // datos del servidor de base de datos

    $host = "127.0.0.1:3306";
    $user = "root";
    $password = "1973852460*";
    $dbName = "crud_app";

    // generar un objeto de mysql para generar la conexion
    $conn = new mysqli($host, $user, $password, $dbName);

    if($conn -> connect_error){
        die('Error de conexion'.$conn -> connect_error);
    }else{
        echo "Conexion exitosa";
    }
?>