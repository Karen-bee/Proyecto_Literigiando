<?php
include '../Controllers/Controlador.php';
$usuario = $_POST['usuario'] ;
$pass = $_POST['pass'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE user_name or correo_usuario='$usuario' and password='$pass'");

if(mysqli_num_rows($validar_login) > 0 ){
    header("location: ../Views/Dasboard.php");
    exit;
}else{
    echo '
    <script>
        alert("Usuario no existe, verifique los datos introducidos");
        window.location = "../Views/home.php";
    </script>    
    ';
    exit;
}
?>