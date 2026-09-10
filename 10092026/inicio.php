<?php
$nombre= "Jesus";
$edad = 20;
echo "Hola mundo desde PHP";
echo "<br>";
echo "Tu nombre es: ", $nombre;
echo "<br>";
echo "Tu edad es: ", $edad;
echo "<br>";
echo "El proximo año tendras: ", $edad + 1;

$estado_civil= false;
if($estado_civil == true){
    echo "Estas casado";
}else{
    echo "FEliz";
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
    <h1>HOLA DESDE UN SERVIDOR apache con PHP</h1>
</body>
</html>