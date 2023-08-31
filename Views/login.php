<?php include('Header.php') ?>

<!--Estilo-->
<link rel="stylesheet" href="../Resources/Css/stylesE.css">


<section class="content-section">
    <h1 class="title-welcome">¡Bienvenido a Litegareando!</h1>
<div class="container-img">
    <img src="\App\Storage\login.jfif" alt="">

    <div class="container-user">
        <div class="content-details">
            
            <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-4">
                <hr class="line-left-log">
                </div>
                <div class="col-4">
                <h2> <i class="bi bi-person-circle"></i> UserLogin</h2>
                </div>
                <div class="col-4">
                <hr class="line-right-log">
                </div>
            </div>
            </div>

            <a class="btn-outlook" type="submit"><img src="\App\Storage\Outlook-Logo.png" alt=""> Iniciar sesión con Outlook</a>

            <div class="content-separator">
                <div class="col-4">
                    <hr>
                </div>
                <div class="col-4">
                    <h3>O</h3>
                </div>
                <div class="col-4">
                    <hr>
                </div>
            </div>

            <div class="input-group-log">
                <label for="" class="bi bi-person"><b>Usuario:</b></label>
                <input type="text" name="" id="" placeholder="Ingresa Usuario o Email">

                <label for="" class="bi bi-key-fill"><b>Contraseña</b></label>
                <input type="password" name="" id="" placeholder="Ingresar Contraseña">
            </div>

            <div class="content-pass">
                <div class="col-1">
                    <input type="checkbox" name="" id="">
                </div>
                <div class="col-5">
                    <h1>Recuerdame</h1>
                </div>
                <div class="col-6">
                    <a href="#">Olvidate la contraseña</a>
                </div>
            </div>
            <div class="log-btn">
                <a class="btn-iniciar" href="#">Iniciar sesión</a>
            </div>
        </div>
        
    </div>    

</div>    
  
</section>
<?php include('Footer.php') ?>
