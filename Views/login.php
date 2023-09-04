<?php include('Header.php') ?>

<!--Estilo-->
<link rel="stylesheet" href="../Resources/Css/stylesE.css">


<div class="content-section-log">
  <div class="login-container">
    <div class="title-details">
      <div class="col-4">
        <hr class="line-left">
      </div>
      <div class="col-4" class="title-log">
        <i class="bi bi-person-circle"></i><strong>UserLogin</strong>
      </div>
      <div class="col-4">
        <hr class="line-right">
      </div>
    </div>
    <div class="button-sesion">
      <a href="#">Iniciar sesión con Outlook</a>
    </div>
    <div class="content-login">
      <form action="">
        <div class="input-group">
          <label for=""><i class="bi bi-person"></i>Usuario:</label>
          <input type="text" name="" id="" placeholder="Ingresa Usuario o Email">

          <label for=""><i class="bi bi-key-fill"></i>Contraseña:</label>
          <input type="text" name="" id="" placeholder="Ingresa Contraseña">
        </div>
        <div class="recovery-password">
          <input type="checkbox" name="" id="">
          <label for="">Recordarme</label>
          <a href="../Views/reset_password.php">Olvidaste la contraseña</a>
        </div>
        <div class="btn-iniciar">
          <a href="#">Iniciar sesión</a>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include('Footer.php') ?>