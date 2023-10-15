<?php
$correo = $_SESSION['correo'];

if (isset($_SESSION['correo'])) {
    include("Conexion.php");

    $sql_perfil_user = "SELECT * FROM usuario WHERE correo_usuario = '$correo'";
    $result_perfil_user = $conexion->query( $sql_perfil_user );
    $row_perfil = $result_perfil_user->fetch_assoc();

    $id_usuario = $row_perfil['idusuario'];
    $id_rol = $row_perfil['idrolusuario'];
    $full_name = $row_perfil['nombrecompleto_usuario'];
    $email = $row_perfil['correo_usuario'];
    $telefono = $row_perfil['telefono_usuario'];
    $direccion = $row_perfil['direccion_usuario'];
    $username = $row_perfil['username'];
    $documento = $row_perfil['documento_usuario'];
    $foto = $row_perfil['foto_usuario'];

    $sql_id_rol = "SELECT * FROM rol_usuario WHERE idrolusuario = '$id_rol'";
    $result_id_perfil = $conexion->query( $sql_id_rol );
    $row_rol = $result_id_perfil->fetch_assoc();

    $nombre_rol = $row_rol['nombrerol'];

    $id_tipo_documento = $row_perfil['idtipodedocumento'];

    $sql_id = "SELECT * FROM tipodocumento where idtipodocumento = '$id_tipo_documento'";
    $result_id = $conexion->query( $sql_id );
    $row_id = $result_id->fetch_assoc();

    $nombre_documento = $row_id['nombre_documento'];

   
    


}

?>