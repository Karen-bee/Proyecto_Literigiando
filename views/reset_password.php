<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de contraseña</title>

    <!-- CSS -->
    <link rel="stylesheet" href="../Estilos/style_cambiocontra.css">
    <!--boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!--fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <div class = "titulo_grande">
        <h1>¡Bienvenido a Literagiando!</h1>
        <hr>
    </div>
    <div class = "contenedor">
        <div class = "seccion2">
            <div class = "formulario">
                <form>
                    <div class = "bloque">
                        <div><hr class = "elemento"></div>
                        <div><img class = "elemento2" src="imagenes/reset_password.png" alt=""></div>
                        <div><hr class = "elemento"></div>
                    </div>
                
                <p2>Cambio de contraseña</p2>
                <p>Asegurese de que las contraseñas 
                    coincidan.</p>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nueva contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder = "Ingrese la contraseña">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirmacion de contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder = "Conforme su contraseña">
                        <a class = "enlace1" href="#">Volver a inicio de sesión</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn3">Cambiar Contraseña</button>
                    </div>
                    <p class = "pregistro">¿No te has registrado?.</p>
                    <a class = "enlace2" href="#">Registrate aqui.</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>