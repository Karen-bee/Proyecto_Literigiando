<?php
include '../Models/conexion.php';

if (isset($_GET['id_asignacion'])) {
    $id_asignacion = $_GET['id_asignacion'];

    $sql = "SELECT * FROM asignacion_paginas WHERE id_asignacion = $id_asignacion";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $userDetails = $result->fetch_assoc();
        echo json_encode($userDetails);
    } else {
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID de usuario no proporcionado']);
}
?>
