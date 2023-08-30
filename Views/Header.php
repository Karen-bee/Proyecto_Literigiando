<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta sirve para tener una pagina web responsive-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Literagiando</title>
    <!--Enlazace para obtener estilos-->
    <link rel="stylesheet" href="../Resources/Css/estilos.css">
    <!--Iconos-->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
</head>


<header>
    <nav class="navbar">
        <!--Logos-->
        <div class="logo">
            <a href="#"><i class="fas fa-home"></i></a>
            <a href="#"><i class="fas fa-user"></i></a>
        </div>
        <!--Items de barra de navegacion-->
        <input type="checkbox" id="check">
        <label for="check" class="mostrar-menu">&#8801</label>
        <ul class="menu">
            <li><a href="#">Sobre nosotros</a></li>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="prueba.php">Blog</a></li>
            <li><label for="#">Inicio Sesion</label></li>
            <label for="check" class="esconder-menu">&#215</label>
        </ul>
    </nav>
</header>

<body>
    <!--Header con dos logos de encabezado-->
    <div class="rectangulo">
        <img class="m-3" src="../Storage/Imagenes/Logo_Lite.png" alt="" width="150" height="50" class="logolite">
        <img class="m-3 " src="../Storage/Imagenes/Logo-Uni.jpeg" alt="" width="150" height="50" class="logouni">
    </div>
</body>

</html>