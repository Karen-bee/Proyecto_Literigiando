<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literagiando</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../Resources/Css/style_cambiocontra.css">
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Storage/Imagenes/Logo_Literagiando.png">

</head>

<body>
    <div class="contenedor">
        <div class="seccion2">
            <div class="formulario">
                <form id="formEmail" method="post" action="../Controllers/ValidarEmail.php">
                    <div class="bloque">
                        <div>
                            <hr class="elemento">
                        </div>
                        <div><img class="elemento2" src="../Storage/Imagenes/reset_password.png" alt=""></div>
                        <div>
                            <hr class="elemento">
                        </div>
                    </div>

                    <p2>Recupera tu cuenta</p2>
                    <p>Se enviara un correo para realizar el cambio <br> de contraseña.</p>
                    <div class="mb-3">
                        <label for="lb_email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="txt_email" name="email" placeholder="Ingrese el correo electronico">
                        <a class="enlace1" href="../Views/login.php">Volver a inicio de sesión</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn3" name="Enviar_correo" id="btnCorreo">Enviar Correo</button>
                    </div>
                    <p class="pregistro">¿No te has registrado?.</p>
                    <a class="enlace2" href="../Views/Registro.php">Registrate aqui.</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>