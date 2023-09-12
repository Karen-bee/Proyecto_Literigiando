<?php


include("../Models/Conexion.php");
include '../Views/login.php';


if(!empty($_POST["btnSubmit"])) {
    if(empty($_POST["correo_usuario"]) and empty($_POST["password"])) {
        echo '<script>$("#errorCampos").modal("show");</script>';


    } else {
        $correo_usuario=$_POST["correo_usuario"];
        $password=$_POST["password"];
        $md5_hash = md5($password);
        $sha256_hash = hash('sha256',$md5_hash);

        $sql=$conexion->query("select * from usuario where correo_usuario='$correo_usuario' and password='$sha256_hash'");
        if ($datos=$sql->fetch_object()) {
            session_start();
            $_SESSION['correo'] = $correo_usuario;
            header("location:../Views/Dasboard.php");
        }else {
            echo '<script>$("#errorlogin").modal("show");</script>';
        }
     
    }
}
