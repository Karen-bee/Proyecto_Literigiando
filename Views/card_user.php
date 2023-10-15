<?php include './layouts/header.php';
      include '../Models/modelo_datos_usuario.php';
?>
  
  <title>Perfil</title>

  <section class="home-section">
    <div class="container-card">
    <div class="card mb-5">
        <div class="card-body">
            <div class="container-1">
                <div class="col-4"><hr class="line-left"></div>
                <div class="col-4"><h1 class="title-perfil"><i class='bx bx-user'></i> Cambiar Foto</h1></div>
                <div class="col-4"><hr class="line-right"></div>
            </div>
            <div class="container-2">
              <div class="col-5">
                <img src="<?php echo $foto?>" alt="">
              </div>
              <div class="col-7">
                <h1 class="name"><?php echo $full_name?></h1>
                <h2 class="rol-name"><?php echo $nombre_rol?></h2>

                <div class="col-10">
                  <form class="form-inline d-flex align-items-center" action="../Controllers/controller_actualizacionP.php" method="post" enctype="multipart/form-data" >
                    <input class="form-control form-control-sm mr-2 input-file" id="formFileSm" type="file" name = "foto">
                    <button type="submit" class="btn_cargar_foto m-2">Enviar</button>
                  </form>

                  <?php
                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if ( false !== strpos( $fullUrl, 'Correct' ) ) {
                            ?>
                              <div class="alert alert-success alert-dismissible fade show mb-5" role="alert">
                                <strong>Hecho!</strong> La foto ha sido actualizada exitosamente.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            <?php
                        } elseif ( false !== strpos( $fullUrl, 'Fail' ) ) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                              <strong>Error!</strong> Algo ocurrió. Por favor, intenta de nuevo.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } elseif ( false !== strpos( $fullUrl, 'Error' ) ) {
                          ?>
                          <div class="alert alert-danger alert-dismissible fade show mb-5" role="alert">
                            <strong>Error!</strong> Por favor, selecciona una imagen.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                      <?php
                      } 
                        ?>
                </div>
              </div>
            </div>
            <div class="container-3">
                <div class="col-4"><hr class="line-left"></div>
                <div class="col-4"><h1 class="title-perfil"><i class='bx bxs-file'></i> Detalles del perfil</h1></div>
                <div class="col-4"><hr class="line-right"></div>
            </div>
            <div class="container-fluid">
              <form class="" action="../Controllers/perfil_controler.php" method="post">

              <label for="nombre">Nombre Completo</label>
              <input type="text" name="nombre" id="nombre" value = "<?php echo $full_name ?>" class="form-control" required>

              <div class = "row g-2">
                <div class ="col">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" value = "<?php echo $email ?>" class="form-control" required>
                </div>
                <div class ="col">
                  <label for="telefono">Telefono</label>
                  <input type="number" name="telefono" id="telefono" value = "<?php echo $telefono ?>" class="form-control" required>
                </div>
              </div>
                
              <div class = "row g-2">
                <div class ="col">
                  <label for="direccion">Direccion</label>
                  <input type="text" name="direccion" id="direccion" value = "<?php echo $direccion ?>" class="form-control" required>
                </div>
                <div class ="col">
                  <label for="Username">Username</label>
                  <input type="text" name="Username" id="Username" value = "<?php echo $username ?>" class="form-control" required>
                </div>
              </div>

              <div class = "row g-2">
                <div class ="col">
                <label >Tipo de documento</label>
                <select class="form-select" aria-label="Default select example" name = "tipo_documento" id = "tipo_documento">
                  <option selected value = "<?php echo $id_tipo_documento ?>"><?php echo $nombre_documento?></option>
                  <?php 
                        $sql_tipo_documento = "SELECT * FROM tipodocumento where nombre_documento != '$nombre_documento'";
                          $result_tipo_documento = $conexion->query( $sql_tipo_documento );
                          while($row_tipo_documento = $result_tipo_documento->fetch_assoc()) {
                        ?>
                      <option value="<?php echo $row_tipo_documento['idtipodocumento']?> ">
                      <?php echo $row_tipo_documento['nombre_documento']?></option>
                        <?php
                        }
                          mysqli_free_result($result_tipo_documento);
                        ?>
                </select>
                </div>
                <div class ="col">
                  <label for="documento">Documento</label>
                  <input type="number" name="documento" id="documento" value = "<?php echo $documento ?>" class="form-control" required>
                </div>
              </div>
              <?php
                        $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                        if ( false !== strpos( $fullUrl, 'hecho' ) ) {
                            ?>
                              <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                <strong>Hecho!</strong> La informacion ha sido actualizada exitosamente.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                            <?php
                        } elseif ( false !== strpos( $fullUrl, 'No_hecho' ) ) {
                            ?>
                            <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                              <strong>Error!</strong> Algo ocurrió. Por favor, intenta de nuevo.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }
                          ?>

            </div>
            <input type="hidden" name="id_user" id="id_user" value = "<?php echo $id_usuario?>">
            <div class="group-btn">
              <button type="submit" class="btn_cargar_foto m-2">Enviar</button>
              <a href="Dashboard.php" class="btn-volver">Volver</a>
            </div>
            </form>
        </div>
    </div>
    </div>
  </section>
  
  <?php include './layouts/footer.php';