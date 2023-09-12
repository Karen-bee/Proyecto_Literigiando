
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<!--Estilo-->
<link rel="stylesheet" href="../Resources/Css/stylesE.css">



<section>
    <img id="img-login" src="../Storage/Imagenes/login.jfif" alt="">
    <h1 class="title-login">¡Bienvenido a Litegareando!</h1>
    
    <form class="form-container" method="post" action="../Controllers/LoginController.php">
        <div class="logo-login">
            <div class="col-3"><hr></div><i class="bi bi-person-circle"></i><h2>UserLogin</h2> <div class="col-3"><hr></div>
        </div>
        <div class="btn-outlook">
            <a href="#">Iniciar sesión con Outlook</a>
        </div>
        <div class="separator">
            <div class="col-6"><hr></div> <h5>O</h5><div class="col-6"><hr></div>
        </div>
        
        <div class="group-log">
            <label for="correo_usuario" class="bi bi-person-fill">Usuario</label>
            <input type="text" id="correo_usuario" name="correo_usuario" class="form-control" placeholder="Ingresar Email">
        </div>
        <div class="group-log">
            <label for="password" class="bi bi-key-fill">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control"  placeholder="Ingresa Contraseña">
        </div>
        <div class="group-pw">
            <div class="checkbox">
                <input type="checkbox" name="" id="">
                <label for="check">Recordarme</label>
            </div>
            <div class="recovery">
                <a href="../Views/reset_password.php">Olvidaste la contraseña</a>
            </div>
        </div>
        <div class="btn-login">
            <input type="submit" value="Iniciar sesión" name="btnSubmit">
        </div>
    </form>
    <div class="link-register">
        <strong>¿No te has registrado?. <a href="#">Registrate Aqui.</a></strong>
    </div>
</section>


