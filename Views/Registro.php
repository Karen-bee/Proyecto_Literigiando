<!DOCTYPE html>
<html lang="en">




<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Literagiando</title>
    <link rel="stylesheet" href="../Resources/Css/styleRegistro.css">

    <!-- Boostrap karen -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

</head>

<body>

    <!-- Imagen con contenedor -->

    <div class="contenedorR">
        <div class="seccion">
            <h1 class="texto-superpuesto">
                Registrate
            </h1>
            <div class="linea-recta"> </div>
            <div class="icon">
                <img src="../Storage/Icon/perfil.png" alt="Icon">
            </div>
            <p class="des">Complete este formulario para crear una cuenta.</p>
            <div class="linea-Desc"> </div>
            <!-- Formulario -->

            <form class="formStyle" id="contactform" method="post" action="../Models/InsertRegistro.php">
                <!-- Tipo de Identificacion -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/identificacion.png" class="iconpequeno" alt="Identificacion">
                    <label for="lb_tipoDocumentos"><strong>Tipo Documento</strong></label>
                    <select id="select_tipodocumento" class="form-control" name="select_Documentos">
                        <option value="0">Elige tu documento</option>
                        <?php include '../Models/CargarSelect_Documentos.php'; ?>

                    </select>
                </div>

                <!-- Numero de identificacion -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/numero_documento.png" class="iconpequeno" alt="Numero de Identificacion">
                    <label for="lb_numeroDocuemnto"><strong>Número de Documento</strong></label>
                    <input type="text" id="txt_numeroDocumento" name="numeroDocumento" class="form-control" maxlength="10" placeholder="Ingrese su Número de Documento">
                </div>

                <!-- Nombre Completo -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/usuario.png" class="iconpequeno" alt="Nombre completo">
                    <label for="lb_nombreCompleto"><strong>Nombre Completo</strong></label>
                    <input type="text" id="txt_nombreCompleto" class="form-control" name="nombreCompleto" placeholder="Ingrese su Nombre Completo">
                </div>

                <!-- Direccion -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/ubicacion.png" class="iconpequeno" alt="Direccion">
                    <label for="lb_nombreCompleto"><strong>Dirección</strong></label>
                    <input type="text" id="txt_direccion" class="form-control" name="direccion" placeholder=" Ingrese su Dirección">
                </div>

                <!-- Telefono -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/telefono.png" class="iconpequeno" alt="Telefono">
                    <label for="lb_nombreCompleto"><strong>Telefono</strong></label>
                    <input type="text" id="txt_telefono" class="form-control" name="telefono" maxlength="10" placeholder=" Ingrese su Telefono">
                </div>

                <!-- Nombre Usuario -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/usuario.png" class="iconpequeno" alt="Usuario">
                    <label for="lb_username"><strong>Nombre de usuario</strong></label>
                    <input type="text" id="txt_username" class="form-control" name="username" placeholder=" Ingrese su Nombre de usuario">
                </div>

                <!-- Email -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/email.png" class="iconpequeno" alt="Email">
                    <label for="lb_email"><strong>E-mail</strong></label>
                    <input type="email" id="txt_email" class="form-control" name="email" placeholder="Ingrese su correo electronico">
                </div>

                <!-- Password -->
                <div class="form-group col-md-5">
                    <img src="../Storage/Icon/clave.png" class="iconpequeno" alt="Contraseña">
                    <label for="lb_pass"><strong>Contraseña</strong></label>
                    <input type="password" id="txt_pass" class="form-control" name="pass" placeholder="Ingrese su contraseña">
                    <div id="message"></div>
                </div>

                <!-- RECAPCHA -->

                <div class="form-group col-md-5">
                    <div class="g-recaptcha" data-sitekey="6LcXNP0nAAAAAP0UrrYUU1ep2flKR8EZbPIWccLj"></div>

                </div>

                <!-- Boton Registro -->
                <button type="submit" class="btnRegistro" name="registrar">Registrate</button>

                <p class="enlace"><strong>¿Ya tienes una cuenta?</strong><a href="../Views/login.php" class="text-white"> Iniciar Sesión</a>
                </p>
            </form>

        </div>
    </div>
    </div>

</body>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="../Resources/JavaScript/script.js" async defer></script>



</html>