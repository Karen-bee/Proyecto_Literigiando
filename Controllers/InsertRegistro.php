<?php

//1. Invocar conexión
include '../Models/conexion.php';

// Variables de error 
$error_documento = false;
$error_username = false;
$error_correo = false;
$error_telefono = false;


// Variable de comprobacion 
$error = false;

// Correo
// Libreria


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
    $cant_duplicidad_documnt = mysqli_num_rows($result_documento);

    echo  $cant_duplicidad_documnt;

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
    $cant_duplicidad_telefono = mysqli_num_rows($result_telefono);




    if (isset($_POST["registrar"])) {
        if ($cant_duplicidad_documnt === 0) {
            // $error_documento = true;
            header("location:../Views/Registro.php?Repeated");
        } else if ($cant_duplicidad_user === 0) {
            //$error_username = true;
            header("location:../Views/Registro.php?Repeated1");
        } else if ($cant_duplicidad_correo === 0) {
            echo $cant_duplicidad_correo;
            //$error_correo = true;
            header("location:../Views/Registro.php?Repeated2");
        } else if ($cant_duplicidad_telefono === 0) {
            //$error_telefono = true;
            header("location:../Views/Registro.php?Repeated3");
        } else {

            // 5. INSERT SQL 
            $idDocumento = $_POST["select_Documentos"];

            $inserta = "INSERT INTO usuario (documento_usuario, 
    idusuario, nombrecompleto_usuario, direccion_usuario, telefono_usuario, username, 
    correo_usuario, password, estado, foto_usuario,Fecha_registro,idtipodedocumento, idrolusuario)
    VALUES('$documento_usuario ', 
    '$nuevoID', '$nombre_usuario', '$direccion','$telefono ', ' $username', '$email', '$sha256_hash'  , 
    '$estado', '$foto_perfil',NOW(),
    '$idDocumento', '$idrolusuario') ";

            $resultado = mysqli_query($conexion, $inserta);



            if ($resultado === TRUE) {
                session_start(); // Inicia la sesión para almacenar datos del usuario
                $_SESSION['username'] = $username; // Almacena el nombre de usuario en la sesión


                $miDisenoHTML = '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Gracias por Registrarte</title>
            <style>
                body {
                    font-family: Source Serif Pro, sans-serif;
                    background-color: #f2f2f2;
                    margin: 0;
                    padding: 0;
                }
        
                .container {
                    max-width: 600px;
                    margin: 0 auto;
                    padding: 20px;
                    background-color: #fff;
                    border-radius: 5px;
                    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                }
        
                .header {
                    background-color: #EB8600;
                    color: #fff;
                    text-align: center;
                    padding: 20px;
                }
        
                .content {
                    padding: 20px;
                }
        
                .button {
                    display: inline-block;
                    padding: 10px 20px;
                    background-color: #EB8600;
                    color: #fff;
                    text-decoration: none;
                    border-radius: 5px;
                }
        
                .button:hover {
                    background-color: #0056b3;
                }
        
                .footer {
                    text-align: center;
                    padding-top: 20px;
                }
            </style>
        </head>
        
        <body>
            <div class="container">
                <div class="header">
                    <h1>Gracias por Registrarte</h1>
                </div>
                <div class="content">
                    <p>Estimado/a Usuario,</p>
                    <p>Gracias por registrarte en nuestro sitio web. Estamos encantados de tenerte como parte de nuestra comunidad.</p>
                    <p>No olvides visitar nuestro sitio web y comenzar a explorar.</p>
                    <p>¡Esperamos verte pronto!</p>
                    <a href="http://localhost/Literagiando/Views/" class="button">Ir al Sitio Web</a>
                </div>
                <div class="footer">
                    <p>Gracias de nuevo por unirte a nosotros.</p>
                </div>
            </div>
        </body>
        
        </html>
        ';

                // Correo
                $to =  $email;
                $subject = "Literagiando - Registro Exitoso";
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $message = $miDisenoHTML;




                if (mail($to, $subject, $message, $headers)) {
                    echo "Correo enviado con éxito";
                } else {
                    echo "Error al enviar el correo";
                }

                header("Location: ../Views/registro_exitoso.php"); // Redirecciona al usuario a la página de confirmación
                exit; // Termina el script

            }

            // Cierra la conexión
            $conexion->close();
        }
    }
}
