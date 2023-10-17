<?php include './layouts/header.php';
include '../Models/modelo_datos_usuario.php'; ?>
<link rel="stylesheet" href="../Resources/Css/dasboard.css">

<div class="row">
  <div class="col-lg-9 col-md-8">
    <div class="cuadrado_sesion">
      <h1 class="nombre font-weight-bold mb-0 letraTitle text-center">Bienvenid@ <?php echo $full_name ?></h1>
      <br>
      <p class="lead text-muted">¡Aquí puedes encontrar varias opciones para administrar!</p>
    </div>
  </div>
</div>
<?php include './layouts/footer.php';
