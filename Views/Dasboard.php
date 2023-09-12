<?php
session_start();
$correo = $_SESSION['correo'];

if ( isset( $_SESSION['correo'] ) ) {

    include("../Models/conexion.php");

    $sql = "SELECT idrolusuario FROM usuario WHERE correo_usuario = '$correo'";
    $result = $conexion->query( $sql );
    $row = $result->fetch_assoc();
    $rol = $row['idrolusuario'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="../Storage/Imagenes/Logo_Literagiando.png">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../Resources/Css/dasboard.css">

    <title>Literagiando</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- prueba --->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


</head>

<body style="overflow: scroll;">

    <div class="d-flex " id="content-wrapper">

        <!-- Sidebar -->
        <div id="sidebar-container" class="bar">

            <div class="logo">
                <img src="../Storage/Imagenes/Logo_Literagiando.png" alt="Literagiando" width="200px" height="200px" style="position:relative; left: 31px;">
            </div>

            <div class="flex-shrink-0 p-3" style="width: 280px;">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                    <?php
                    include('../Controllers/gestion_roles.php')
                    ?>
                    </li>
                    <li class="border-top my-3"></li>
                    <li class="mb-1">
                        <button class="btn btn-toggle align-items-center rounded collapsed  text-white" style="font-weight: bold;" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
                            <i class="bi bi-people-fill"></i> Cuenta
                        </button>
                        <div class="collapse" id="account-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-light rounded text-white">Mi perfil</a></li>
                                <li><a href="../Controllers/controlador_logout.php" class="link-light rounded  text-white">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <!-- Fin sidebar -->

        <div class="w-100">

            <!-- Navbar -->
            <nav style="background-color:black" class="navbar navbar-expand-lg navbar-light border-bottom">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 letra">
                            <li class="nav-item dropdown">
                                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="../Storage/Imagenes/alberto.jpg " width="50" height="50" class="img-fluid rounded-circle avatar mr-2 " alt="" />
                                    Diana Alberto
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-black " href="#"><i class="icon ion-md-person lead mr-2"></i>Mi perfil</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-black" href="../Controllers/controlador_logout.php" name="log-out-outline"><i class="icon ion-md-power"></i> Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Fin Navbar -->

            <!-- Page Content -->
            <main>
                <iframe id="miIframe" name = "miIframe" src="../Views/InicioDasboard.php" class = "iframe" frameborder="0"></iframe>
            </main>


        </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php }else{
    header('Location: login.php');
        }
    ?>