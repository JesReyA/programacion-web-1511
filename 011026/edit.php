<?php
    
    include('db.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = $conn -> query($sql);
    // Fetch assoc sirve para obtener un array asociativo de la fila obtenida de la consulta
    $row = $result -> fetch_assoc();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];

        $sql = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
        if($conn -> query($sql) === TRUE){
            echo "Usuario actualizado correctamente";
            header('Location: index.php');
            exit();
        } else {
            echo "Error al actualizar el usuario: " . $conn -> error;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"><br><br>
        
        <input type="submit" name="submit" value="Actualizar">
    </form>
</body>
</html>