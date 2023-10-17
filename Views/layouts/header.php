<?php
session_start();
$correo = $_SESSION['correo'];

if ( isset( $_SESSION['correo'] ) ) {

    include("../Models/conexion.php");

    $sql = "SELECT * FROM usuario WHERE correo_usuario = '$correo'";
    $result = $conexion->query( $sql );
    $row = $result->fetch_assoc();
    $rol = $row['idrolusuario'];
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="./../../Resources/Css/app.css">
    <link rel="stylesheet" href="./../../Resources/Css/stylesE2.css">
    <!-- Boxicons CDN Link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<nav class="navbar navbar-expand-lg" id="dark">
  <div class="container-fluid">
    
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown ms-auto">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <img src="<?php echo $row['foto_usuario']?>" alt="" class="img-fluid rounded-circle avatar mr-2">
            <?php echo $row['nombrecompleto_usuario']?>
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="../Views/card_user.php"><i class="bi bi-person-circle m-2"></i> Perfil</a>
              <a class="dropdown-item" href="../../Controllers/controlador_logout.php"><i class="bi bi-box-arrow-right m-2"></i> Cerrar sesion</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav> 

<div class="sidebar">
  <div class="logo-details">
  <img class="icon" src="../Storage/Imagenes/Logo_Literagiando.png" alt="">    
      <div class="logo_name">Literagiando</div>
      <i class='bx bx-menu' id="btn" ></i>
  </div>
  <ul class="nav-list">
  <?php
    include('../Controllers/gestion_roles.php')
  ?>
  </ul>
</div>
<?php }else{
    header('Location: login.php');
        }
    ?>


  