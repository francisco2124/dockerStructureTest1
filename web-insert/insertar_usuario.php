<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    $sql = "INSERT INTO usuarios (nombre, contrasena) VALUES ('$nombre', '$contrasena')";
    if ($conn->query($sql) === TRUE) {
        echo "Usuario insertado correctamente";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Insertar Usuario</h2>
<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Contraseña: <input type="password" name="contrasena" required><br>
    <button type="submit">Insertar Usuario</button>
</form>
