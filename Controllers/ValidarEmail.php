<?php

//1. Invocar conexión
include '../Models/conexion.php';



// -- Tomar los datos provenientes de los campos del Formulario

if (isset($_POST["Enviar_correo"])) {

    $email_consulta = $_POST['email'];
    $consultaEmail = "SELECT * FROM usuario WHERE correo_usuario LIKE '%$email_consulta%'";
    $resultado_email = mysqli_query($conexion, $consultaEmail);
    $row = mysqli_num_rows($resultado_email);

    session_start(); // Inicia la sesión para almacenar datos del usuario
    $_SESSION['email'] = $email_consulta; // Almacena el nombre de usuario en la sesión

    if ($row !== 0) {
        $miDisenoHTML1 = '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Recuperar Cuenta</title>
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
                    <h1>Recuperar Cuenta</h1>
                </div>
                <div class="content">
                    <p>Estimado/a Usuario,</p>
                    <p>Recibes este correo porque solicitaste recuperar tu cuenta en Literagiando</p>
                    <p>Estamos aquí para ayudarte a restablecer tu acceso. A continuación, encontrarás un enlace seguro para cambiar tu contraseña:
                    </p>
                    <a href="http://localhost/pruebita/Views/reset_password.php?dato&&email_consulta='.$email_consulta.'" class="button">Recuperar Cuenta</a>
                    <p>Por favor, haz clic en el enlace anterior y sigue las instrucciones para crear una nueva contraseña. Asegúrate de utilizar una contraseña segura que contenga al menos 8 caracteres, incluyendo letras mayúsculas, letras minúsculas, números y símbolos.</p>
                    <p>Si no solicitaste esta recuperación de cuenta o no reconoces esta solicitud, te recomendamos que ignores este correo electrónico y tomes medidas adicionales para proteger tu cuenta. </p>
                    </div>
                <div class="footer">
                    <p>Gracias por confiar en Literagiando.</p>
                </div>
            </div>
        </body>
        
        </html>
        ';

        // Correo
        $to1 =  $email_consulta;
        $subject1 = "Literagiando - Recuperacion de Cuenta";
        $headers1 = "MIME-Version: 1.0" . "\r\n";
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $message1 = $miDisenoHTML1;




        if (mail($to1, $subject1, $message1, $headers1)) {
            echo '<script>$("#correoEnviadoModal").modal("show");</script>';
            //echo "Correo enviado con éxito";
        } else {
            echo '<script>$("#NOcorreoEnviadoModal").modal("show");</script>';
        }
        //header("Location: ../Views/login.php"); // Redirecciona al usuario a la página de confirmación
        exit; // Termina el script

    } else {
        echo '<script>$("#NOcorreoEnviadoModal").modal("show");</script>';
    }
    // Cierra la conexión
    $conexion->close();
}
