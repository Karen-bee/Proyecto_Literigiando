<?php
include("../Models/Conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre_usuario = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $username = $_POST['Username'];
    $tipo_documento = $_POST['tipo_documento'];
    $documento = $_POST['documento'];
    $id = $_POST['id_user'];

    // editar usuarios 

    $sql_edit = " UPDATE usuario SET 
            correo_usuario='$email',
            direccion_usuario = '$direccion',
            telefono_usuario = '$telefono',
            username = '$username',
            nombrecompleto_usuario = '$nombre_usuario',
            idtipodedocumento = '$tipo_documento',
            documento_usuario = '$documento'
            WHERE idusuario = '$id'";  
            $resultTotalEdit = $conexion->query( $sql_edit);

    if ($resultTotalEdit) {
        header("location:../Views/card_user.php?hecho");
    } else {
        header("location:../Views/card_user.php?No_hecho");
    }
}
?>