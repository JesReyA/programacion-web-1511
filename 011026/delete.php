<?php
    include('db.php');

    $id = $_GET['id'];

    echo $id;

    $sql = "DELETE FROM usuarios WHERE id = $id";

    if($conn ->query($sql)=== TRUE){
        header('Location: index.php');
    }else{
        echo "ERROR AL ELIMINAR";
    }
?>