<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Resources/Css/Header.css">

    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <div class="imagenes_header">
        <img class="m-3" src="../Storage/Imagenes/Logo_Lite.png" alt="" width="150" height="50">
        <img class="m-3 " src="../Storage/Imagenes/Logo_Uni.png" alt="" width="150" height="50">
    </div>

    <nav class="navbar fixed-top">
        <div class="container-fluid header">
            <a class="navbar-brand Iconhome" href="#">
                <img src="../Storage/Icon/home.png" alt="Home">
            </a>
            <ul class="nav letra">
                <li class="nav-item"><a class="nav-link text-white" href="../Views/Nosotros.php">Sobre nosotros</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Noticias</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Eventos</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Blog</a></li>
            </ul>
            <ul class="nav letra ms-auto">
                <li class="nav-item ulIzqu"><a class="nav-link text-white" href="#">Inicio Sesion</a></li>
                <a class="navbar-brand Iconhome" href="../Views/login.php">
                    <img src="../Storage/Icon/user.png" alt="Home" height="40">
                </a>
            </ul>
        </div>
    </nav>

    <!-- Resto de tu contenido HTML -->
</body>

</html>