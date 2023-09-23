<?php
// 1. Invocar conexión
include '../Models/conexion.php';

$sql_edit_computer = "UPDATE usuario SET password = '$sha256_hash', Fecha_registro = NOW() WHERE correo_usuario = '$emailConsulta'";
$resultTotalEdit_computer = $conexion->query($sql_edit_computer);