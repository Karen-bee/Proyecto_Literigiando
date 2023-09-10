<?php

//1. Invocar conexión
include '../Models/conexion.php';

//2. Crear conexión a la Base de Datos
$conexion = new mysqli($server, $userRoot, $password, $db);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}


//3.  LLenar Select Documentos 

$sql = "SELECT idtipodocumento, nombre_documento FROM tipodocumento";
$result = $conexion->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row["idtipodocumento"] . "'>" . $row["nombre_documento"] . "</option>";
    }
} else {
    echo "<option value=''>No hay opciones disponibles</option>";
}

