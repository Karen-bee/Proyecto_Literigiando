<?php
session_start();
$correo = $_SESSION['correo'];

if (isset($_SESSION['correo'])) {
    include("../Models/Conexion.php");

    //Consulta para ver la url anterior 
        $sql_user = "SELECT * FROM usuario WHERE correo_usuario ='$correo'";
        $existencia = mysqli_query($conexion, $sql_user);
        $existencia_user = mysqli_num_rows($existencia);

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["foto"]) && is_uploaded_file($_FILES["foto"]["tmp_name"]) && !empty($_FILES["foto"]["name"])) {
        // Ruta donde se almacenaran los archivos subidos
        $carpeta_destino = "../Storage/img_user/";

        // Obtener el nombre del archivo y la ruta temporal
        $nombre_archivo = $_FILES["foto"]["name"];
        $ruta_temporal = $_FILES["foto"]["tmp_name"];

          //Condicional para verificar si el usuario tiene foto
          if ($existencia_user > 0) {
            $sql_user2 = "SELECT * FROM usuario WHERE correo_usuario ='$correo'";
            $sql_url = $conexion->query($sql_user2);
            $URL = $sql_url->fetch_assoc();
            $url_foto = $URL['foto_usuario'];
            // Eliminar la foto anterior si existe
            if (file_exists($url_foto)) {
                unlink($url_foto);
            }
        }

        // Mover el archivo a la carpeta de destino
        $ruta_destino = $carpeta_destino . $nombre_archivo;
        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            
            //Actualizar la nueva ruta en la base de datos

            $sql_edit_foto = " UPDATE usuario SET foto_usuario= '$ruta_destino' WHERE correo_usuario = '$correo'";
            $resultTotalEdit_foto = $conexion->query($sql_edit_foto);

            header("location:../Views/card_user.php?Correct");
            exit();
        } else {
            header("location:../Views/card_user.php?Fail");
            exit();
        }
    } else {
        // Manejar el caso si no se ha subido un archivo
        header("location:../Views/card_user.php?Error");
        exit();
    }
}
?>