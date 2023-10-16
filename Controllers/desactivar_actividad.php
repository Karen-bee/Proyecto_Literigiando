<?php
include '../Models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_asignacion']) && isset($_POST['estado'])) {
    $id_asignacion = $_POST['id_asignacion'];
    $estadoActual = $_POST['estado'];

    // Cambiar el estado del usuario
    $nuevoEstado = ($estadoActual == 1) ? 0 : 1;

    // Utilizar consultas preparadas para evitar inyección SQL
    $sql = "UPDATE asignacion_paginas SET estado = ? WHERE id_asignacion = ?";
    
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ii", $nuevoEstado, $id_asignacion);

    if ($stmt->execute()) {
        echo "La actividad ha sido " . ($nuevoEstado == 1 ? "activada" : "desactivada") . " con éxito.";
    } else {
        echo "Error al cambiar el estado de la actividad: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Solicitud no válida.";
}
