<?php

//1. Invocar conexión
include '../Models/conexion.php';


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
    $nuevoID = null;
    $foto_perfil = '../Storage/Imagenes/Foto_perfil_usuario/Acosta.jpg';



    // -- Encriptar contraseña 
    $entrada = $password; // La cadena que deseas hashear
    // Calcula el hash MD5
    $md5_hash = md5($entrada);
    // Calcula el hash SHA-256 del hash MD5
    $sha256_hash = hash('sha256', $md5_hash);


    // CONSULTAS


    // 1. Documento 

    $documento_validar = "SELECT * FROM usuario WHERE documento_usuario LIKE '%$documento_usuario%'";
    $result_documento = mysqli_query($conexion, $documento_validar);
    $cant_duplicidad = mysqli_num_rows($result_documento);

    // 2. NO REPETIR USERNAME

    $user = "SELECT * FROM usuario WHERE username LIKE '%$username%'";
    $result = mysqli_query($conexion, $user);
    $cant_duplicidad_user = mysqli_num_rows($result);



    // 3. NO REPETIR EMAIL

    $validar_correo = "SELECT * FROM usuario WHERE correo_usuario LIKE '%$email%'";
    $result_correo = mysqli_query($conexion, $validar_correo);
    $cant_duplicidad_correo = mysqli_num_rows($result_correo);

    // 4. NO REPETIR TELEFONO 

    $validar_telefono = "SELECT * FROM usuario WHERE telefono_usuario = '$telefono'";
    $result_telefono = mysqli_query($conexion, $validar_telefono);
    $cant_duplicidad_correo = mysqli_num_rows($result_telefono);


    // Variables de error 

    if (isset($_POST["registrar"])) {
        if (
            $cant_duplicidad == 0 ||  $cant_duplicidad_user == 0 ||  $cant_duplicidad_correo == 0
            ||  $cant_duplicidad_correo == 0
        ) {
            header("location:../Views/Registro.php?Repeated");
        } else {
            // 5. INSERT SQL 
            $idDocumento = $_POST["select_Documentos"];

            $inserta = "INSERT INTO usuario (documento_usuario, 
    idusuario, nombrecompleto_usuario, direccion_usuario, telefono_usuario, username, 
    correo_usuario, password, estado, foto_usuario,idtipodedocumento, idrolusuario)
    VALUES('$documento_usuario ', 
    '$nuevoID', '$nombre_usuario', '$direccion','$telefono ', ' $username', '$email', '$sha256_hash'  , 
    '$estado', '$foto_perfil',
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
    }
}
