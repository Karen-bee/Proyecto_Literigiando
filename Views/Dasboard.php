<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Ionic icons -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="/Storage/Imagenes/">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../Resources/Css/dasboard.css">

    <title>Literagiando</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="d-flex " id="content-wrapper">

        <div id="sidebar-container" class="bar">
            <div class="logo">
                <img src="../Storage/Imagenes/Logo_Literagiando.png" alt="Literagiando" width="200px" height="200px" style="position:relative; left: 31px;">
            </div>
            <div class="menu letra">
                <ul>
                    <li><a href="#" class="casilla d-block text-light text-center p-3 border-0"><i class="icon ion-md-apps lead mr-2"></i> Dashboard</a></li>
                    <li>
                        <a href="#" class="casilla d-block text-light text-center p-3 border-0"><i class="icon ion-md-pie lead mr-2"></i> Biblioteca</a>
                        <ul class="sub-menu">
                            <li class="casilla d-block text-light text-center p-3 border-0"><a href="tableResult.php"></a></li>
                            <li class="casilla d-block text-light text-center p-3 border-0"><a href="#">Subitem 2</a></li>
                            <!-- Agrega más subitems aquí si es necesario -->
                        </ul>
                    </li>
                    <!-- Resto de tus elementos del menú -->
                </ul>
            </div>
        </div>
        <!-- Fin sidebar -->

        <!-- Resto de tu contenido HTML -->
    </div>
</body>

</html>
En este ejemplo, he agregado un submenú que se oculta inicialmente utilizando la clase .sub-menu y display: none. Luego, utilizo la pseudo-clase :hover en la etiqueta <li> que contiene el enlace principal para mostrar el submenú cuando el mouse se coloca sobre el enlace. Puedes ajustar los estilos y la estructura según tus preferencias de diseño.







    <div class="w-100">

        <!-- Navbar -->
        <nav style="background-color: black" class="navbar navbar-expand-lg navbar-light border-bottom">
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
                                <a class="dropdown-item text-black " href="#"><i class="icon ion-md-person lead mr-2"></i>My profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-black" href="#" name="log-out-outline"><i class="icon ion-md-power"></i> Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fin Navbar -->

        <!-- Page Content -->
        <div id="content" class="bg-grey w-100">
            <section class="py-3 cuadradoMensaje">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-8">
                            <h1 class="nombre font-weight-bold mb-0 letraTitle text-center">Bienvenida <br>Diana Alberto</h1>
                            <br>
                            <p class="lead text-muted">¡Aquí puedes encontrar varias opciones para administrar!</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
    </div>


    </body>

    </html>