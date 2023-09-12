<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<!--Estilo-->
<link rel="stylesheet" href="../Resources/Css/stylesE.css">



<section>
    <img id="img-login" src="../Storage/Imagenes/login_literagiando.jpeg" alt="">


    <form class="form-container" method="post" action="../Controllers/LoginController.php">
        <div class="logo-login">
            <div class="col-3">
                <hr>
            </div><i class="bi bi-person-circle"></i>
            <h2>UserLogin</h2>
            <div class="col-3">
                <hr>
            </div>
        </div>
        <div class="btn-outlook">
            <a href="#">Iniciar sesión con Outlook</a>
        </div>
        <div class="separator">
            <div class="col-6">
                <hr>
            </div>
            <h5>O</h5>
            <div class="col-6">
                <hr>
            </div>
        </div>

        <div class="group-log">
            <label for="correo_usuario" class="bi bi-person-fill">Usuario</label>
            <input type="email" id="correo_usuario" name="correo_usuario" class="form-control" placeholder="Ingresar Email">
        </div>
        <div class="group-log">
            <label for="password" class="bi bi-key-fill">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Ingresa Contraseña">
        </div>
        <div class="group-pw">
            <div class="checkbox">
                <input type="checkbox" name="" id="">
                <label for="check">Recordarme</label>
            </div>
            <div class="recovery">
                <a href="../Views/envio_correo.php">Olvidaste la contraseña</a>
            </div>
        </div>
        <div class="btn-login">
            <input type="submit" value="Iniciar sesión" name="btnSubmit">
        </div>
    </form>
    <div class="link-register">
        <strong>¿No te has registrado?. <a href="../Views/Registro.php">Registrate Aqui.</a></strong>
    </div>

    <!-- POP UP USUARIO O CONTRASEÑA INCORRECTOS -->

    <div class="modal fade" id="errorlogin" tabindex="-1" role="dialog" aria-labelledby="correoEnviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titlePop" id="correoEnviadoModalLabel"><strong>Contraseña Incorrecta</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-x-square-fill"></i></span>
                    </button>
                </div>
                <div class="letraPop ">
                    Su usuario o contraseña esta incorrecta.
                    </br>
                    Por favor verifique de nuevo
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn3" data-dismiss="modal" onclick="redireccionarALogin()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- POP UP LLENAR CAMPOS -->

    <div class="modal fade" id="errorCampos" tabindex="-1" role="dialog" aria-labelledby="correoEnviadoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="titlePop" id="correoEnviadoModalLabel"><strong>CAMPOS VACIOS</strong></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="bi bi-x-square-fill"></i></span>
                    </button>
                </div>
                <div class="letraPop ">
                   Por favor llene los campos.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn3" data-dismiss="modal" onclick="redireccionarALogin()">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function redireccionarALogin() {
            window.location.href = "../Views/login.php";
        }
    </script>
    <!-- Agrega esto en el <head> de tu HTML -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</section>