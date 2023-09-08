<?php

//1. Invocar conexión
include '../Controllers/conexion.php';

//2. Crear conexión a la Base de Datos
$conexion = new mysqli($server, $userRoot, $password, $db);

if ($conexion->connect_error) {
    die("Connection failed: " . $conexion->connect_error);
}

session_start();

// 4. Insert Registro 

// -- Tomar los datos provenientes de los campos del Formulario

if (isset($_POST["registrar"])) {

    $documento_usuario = $_POST['numeroDocumento'];
    $nombre_usuario = $_POST['nombreCompleto'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $estado = 1;
    $idrolusuario = 2;

    // id Usuario 
    // Consulta para obtener el último ID insertado
    $consultaUltimoID = "SELECT MAX(idusuario) AS ultimoID FROM usuario";
    $resultadoUltimoID = mysqli_query($conexion, $consultaUltimoID);
    $filaUltimoID = mysqli_fetch_assoc($resultadoUltimoID);
    $ultimoID = $filaUltimoID['ultimoID'];

    // Calcular el nuevo ID
    $nuevoID = $ultimoID + 1;


    // -- Encriptar contraseña 
    $entrada = $password; // La cadena que deseas hashear
    // Calcula el hash MD5
    $md5_hash = md5($entrada);
    // Calcula el hash SHA-256 del hash MD5
    $sha256_hash = hash('sha256', $md5_hash);


    // 5. INSERT SQL 
    $idDocumento = $_POST["select_Documentos"];

    $inserta = "INSERT INTO usuario (documento_usuario, 
    idusuario, nombrecompleto_usuario, direccion_usuario, telefono_usuario, username, 
    correo_usuario, password, estado, idtipodedocumento, idrolusuario)
    VALUES('$documento_usuario ', 
    '$nuevoID', '$nombre_usuario', '$direccion','$telefono ', ' $username', '$email', '$sha256_hash'  , '$estado', 
    '$idDocumento', '$idrolusuario') ";





    $resultado = mysqli_query($conexion, $inserta);

    if ($resultado === TRUE) {
        session_start(); // Inicia la sesión para almacenar datos del usuario
        $_SESSION['username'] = $username; // Almacena el nombre de usuario en la sesión
        header("Location: ../Views/registro_exitoso.php"); // Redirecciona al usuario a la página de confirmación
        exit; // Termina el script
    }

    // Cierra la conexión
    $conexion->close();
}
