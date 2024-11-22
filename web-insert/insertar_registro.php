<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
    $ubicacion = $_POST['ubicacion'];

    // Insertar el nuevo registro
    $sql = "INSERT INTO registros_salientes (valor, ubicacion) VALUES ('$valor', '$ubicacion')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo registro insertado correctamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<h2>Insertar Registro Saliente</h2>
<!-- Formulario para insertar registros salientes -->
<form action="insertar_registro.php" method="POST">
    <label for="valor">Valor:</label>
    <input type="text" id="valor" name="valor" required><br><br>
    
    <label for="ubicacion">Ubicación:</label>
    <input type="text" id="ubicacion" name="ubicacion" required><br><br>
    
    <button type="submit">Insertar Registro</button>
</form>

