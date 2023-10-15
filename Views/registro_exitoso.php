<?php
session_start(); // Inicia la sesión si aún no está iniciada
?>
<!DOCTYPE html>
<html>

<?php
include("../Views/Header.php")
?>

<head>
    <title>Literagiando</title>

</head>

<body>
    <div class="conte">
        <div class="cuadroFondo">
            <div class="columnas">
                <div class="columna-izquierda">

                    <h1 class="title">Registro Exitoso</h1>
                    <p class="letra">Gracias por registrarte en nuestro sitio web. Tu cuenta ha sido creada con éxito.</p>
                    <div class="link">
                        <p class="letra"><a href="../Views/login.php" style="color:#EB8600">Iniciar sesión</a></p>
                    </div>
                </div>

                <div class="columna-derecha">
                    <div class="iconG">
                        <img src="../Storage/Imagenes/Logo_Literagiando.png" alt="Logo Literagiando">
                    </div>
                    <!-- Agrega más detalles de la cuenta si lo deseas -->

                </div>
            </div>
        </div>
    </div>
</body>


<?php
include("../Views/Footer.php")
?>

</html>