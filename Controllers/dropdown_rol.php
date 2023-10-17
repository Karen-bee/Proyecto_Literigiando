<?php
// 1. Incluir el archivo de conexión
include '../Models/conexion.php';

// 2. Realizar la consulta SQL para seleccionar valores distintos de 'nombrerol'
$sql = "SELECT DISTINCT nombrerol FROM rol_usuario";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {

    // 4. Iterar a través de los resultados y crear opciones para el select
    while ($row = $result->fetch_assoc()) {
        $nombrerol = $row["nombrerol"];
        echo '<option value="' . $nombrerol . '">' . $nombrerol . '</option>';
    }

    echo '</select>';
} else {
    echo "No hay resultados.";
}

// 5. Cerrar la conexión a la base de datos (si es necesario)
$conexion->close();
