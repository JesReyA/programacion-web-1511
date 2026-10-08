<?php
    //Sirve para acarrear variables entre archivos php para insertarlos/usarlos en otro, se usa session_start() para iniciar la sesión y luego se puede usar $_SESSION['nombre'] = $nombre; para guardar la variable en la sesión y luego se puede usar $_SESSION['nombre'] para acceder a la variable en otro archivo php.
    session_start();
    $nombre = $_GET['nombre_dato'];
    $edad = $_GET['edad_dato'];

    // $nombre = "Jesus";
    // $edad = 32;

    // echo "<h1>".$nombre."</h1>";
    // echo "<br>";
    // echo "<h2>".$edad."</h2>";

    if ($edad >= 18){
        header("Location: mayor.php");
        $_SESSION['nombre'] = $nombre;
    }else{
        header("Location: menor.html");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if($edad >= 18){ ?>
            <h1> Puedes pasar</h1>
        <?php }else{ ?>
            <h1 style="color: red;"> No puedes pasar</h1>
       <?php }
    ?>
</body>
</html>