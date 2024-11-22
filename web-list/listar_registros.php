<?php
include 'config.php';

$result = $conn->query("SELECT * FROM registros_salientes");

echo "<h2>Registros Salientes</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Fecha</th><th>Valor</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fecha"]. "</td><td>" . $row["valor"]. "</td><td>" . $row["ubicacion"]. "</td></tr>";
}
echo "</table>";
?>
