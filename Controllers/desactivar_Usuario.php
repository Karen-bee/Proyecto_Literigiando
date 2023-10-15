<?php
include '../Models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['idusuario']) && isset($_POST['estado'])) {
    $idUsuario = $_POST['idusuario'];
    $estadoActual = $_POST['estado'];

    // Cambiar el estado del usuario
    $nuevoEstado = ($estadoActual == 1) ? 0 : 1;

    // Utilizar consultas preparadas para evitar inyección SQL
    $sql = "UPDATE usuario SET estado = ? WHERE idusuario = ?";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ii", $nuevoEstado, $idUsuario);

    if ($stmt->execute()) {
        echo "El usuario ha sido " . ($nuevoEstado == 1 ? "activado" : "desactivado") . " con éxito.";
    } else {
        echo "Error al cambiar el estado del usuario: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Solicitud no válida.";
}
?>
