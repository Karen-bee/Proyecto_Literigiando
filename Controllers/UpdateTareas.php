<?php
include '../Models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $id_asignacion = $_POST['actividades'];
    $TipoRol = $_POST['select_rol']; // Nuevo campo para el tipo de rol
    $estado = $_POST['select_estado'];
    $actividades = $_POST['select_actividades'];

    // Obtener el idrolusuario según el tipo de rol
    $sql = "SELECT idrolusuario FROM rol_usuario WHERE nombrerol = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $TipoRol);
    $stmt->execute();
    $stmt->bind_result($idrolusuario);
    $stmt->fetch();
    $stmt->close();

    // Actualiza la información del usuario en la base de datos
    $updateSql = "UPDATE asignacion_paginas SET
        idrolusuario = '$idrolusuario',
        idpagina = '$estado',
        estado = '$actividades',
        Fecha_creacion = NOW()
        WHERE id_asignacion = $id_asignacion";

    if ($conexion->query($updateSql) === TRUE) {
        // Éxito: Mostrar alerta de JavaScript
        echo "<script>
            window.alert('Registro actualizado con éxito');
            window.location.href = '../Views/asignacion_tareas.php'; // Redirige a la página deseada
        </script>";
    } else {
        // Error: Mostrar mensaje de error
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}
?>
