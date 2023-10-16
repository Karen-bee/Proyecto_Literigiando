<?php
include '../Models/conexion.php';

if (isset($_POST["guardarActividad"])) {

  $TipoRol = $_POST["select_rol"];
  $estado = $_POST["select_estado"];
  $actividades = $_POST["select_actividades"];

  // Obtener el idrolusuario según el tipo de rol
  $sql = "SELECT idrolusuario FROM rol_usuario WHERE nombrerol = ?";
  $stmt = $conexion->prepare($sql);
  $stmt->bind_param("s", $TipoRol);
  $stmt->execute();
  $stmt->bind_result($idrolusuario);
  $stmt->fetch();
  $stmt->close();

  $inserta = "INSERT INTO `asignacion_paginas` (`id_asignacion`, `idrolusuario`, `idpagina`, `estado`, `Fecha_creacion`) 
              VALUES (NULL, ?, ?, ?, NOW())";

  // Crear una sentencia preparada
  $stmt = $conexion->prepare($inserta);

  // Vincular parámetros
  $stmt->bind_param("sss", $idrolusuario, $actividades, $estado);

  // Ejecutar la consulta
  $resultado = $stmt->execute();

  // Verificar el resultado y mostrar SweetAlert
  header("Location: ../Views/asignacion_tareas.php");


  // Cerrar la sentencia
  $stmt->close();
}
