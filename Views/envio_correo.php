<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literagiando</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../Resources/css/style_cambiocontra.css">
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../Storage/Imagenes/Logo_Literagiando.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
                        <div class="elemento2">
                            <img src="../Storage/Icon/reset_password.png" alt="Resest Password" width="46px">
                        </div>
                        <div>
                            <hr class="elemento">
                        </div>
                    </div>

                    <p2>Recupera tu cuenta</p2>
                    <p>Se enviara un correo para realizar el cambio <br> de contraseña.</p>
                    <div class="mb-3">
                        <label for="lb_email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="txt_email" name="email" placeholder="Ingrese el correo electronico">
                        <a class="enlace1" href="../Views/login.php"><strong>Volver a inicio de sesión</strong></a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn3" name="Enviar_correo" id="btnCorreo"><strong>Enviar Correo<strong></button>
                    </div>
                    <p class="pregistro">¿No te has registrado?.</p>
                    <a class="enlace2" href="../Views/Registro.php" onclick="abrirPopup">Registrate aqui.</a>
                </form>
            </div>
        </div>
    </div>
    <!-- POP UP ENVIO CORREO -->

    <!-- Agrega esto en tu HTML antes del cierre de la etiqueta </body> -->
    <div class="modal fade" id="correoEnviadoModal" tabindex="-1" role="dialog" aria-labelledby="correoEnviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titlePop" id="correoEnviadoModalLabel"><strong>Correo Enviado</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-x-square-fill"></i></span>
                    </button>
                </div>
                <div class="letraPop ">
                    Se le ha enviado un correo con éxito. Revise su bandeja de entrada para seguir las instrucciones.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn3" data-dismiss="modal" onclick="redireccionarALogin()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- POP UP NO SE ENVIO -->
    <div class="modal fade" id="NOcorreoEnviadoModal" tabindex="-1" role="dialog" aria-labelledby="correoEnviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titlePop" id="correoEnviadoModalLabel"><strong>Correo no enviado<strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-x-square-fill"></i></span>
                    </button>
                </div>
                <div class="letraPop">
                    El correo ingresado no existe en nuestra base de datos.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn3" data-dismiss="modal" onclick="redireccionarACorreo()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function redireccionarALogin() {
            window.location.href = "../Views/login.php";
        }

        function redireccionarACorreo() {
            window.location.href = "../Views/envio_correo.php";
        }
    </script>
    <!-- Agrega esto en el <head> de tu HTML -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>