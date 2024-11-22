<?php
include 'config.php';

$result = $conn->query("SELECT * FROM usuarios");

echo "<h2>Usuarios Registrados</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Nombre</th><th>Contraseña</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id']}</td><td>{$row['nombre']}</td><td>{$row['contrasena']}</td></tr>";
}
echo "</table>";
?>
