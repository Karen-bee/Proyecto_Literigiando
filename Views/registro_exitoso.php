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
    <h1 class="title">Registro Exitoso</h1>
    <p>Gracias por registrarte en nuestro sitio web. Tu cuenta ha sido creada con éxito.</p>
    <p>Tu nombre de usuario es: <?php echo $_SESSION['username']; ?></p>
    <!-- Agrega más detalles de la cuenta si lo deseas -->
    <p><a href="../Views/login.php">Iniciar sesión</a></p>
</body>

<?php
include("../Views/Footer.php")
?>

</html>