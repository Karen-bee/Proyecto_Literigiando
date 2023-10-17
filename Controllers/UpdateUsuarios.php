<?php
include '../Models/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $idUsuario = $_POST['idUsuario'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $username = $_POST['username'];

    // Ruta donde se guardará la imagen (ajusta según tu estructura de carpetas)
    $carpetaDestino = '../Storage/img_user/';

    // Verifica si se ha cargado un nuevo archivo
    if (!empty($_FILES['imagen']['name'])) {
        $nombreImagen = $_FILES['imagen']['name'];
        $rutaImagen = $carpetaDestino . $nombreImagen;

        // Mueve la imagen cargada a la carpeta destino
        move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaImagen);
    } else {
        // Si no se ha cargado un nuevo archivo, obtén la ruta actual de la base de datos
        $sql = "SELECT foto_usuario FROM usuario WHERE idusuario = $idUsuario";
        $result = $conexion->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $rutaImagen = $row['foto_usuario'];
        } else {
            // Manejar el caso en que no se pueda obtener la ruta actual
            echo "Error al obtener la ruta de la imagen actual.";
            exit;
        }
    }

    // Actualiza la información del usuario en la base de datos
    $updateSql = "UPDATE usuario SET
        nombrecompleto_usuario = '$nombreCompleto',
        telefono_usuario = '$telefono',
        correo_usuario = '$email',
        direccion_usuario = '$direccion',
        username = '$username',
        foto_usuario = '$rutaImagen'
        WHERE idusuario = $idUsuario";

    if ($conexion->query($updateSql) === TRUE) {
        // Éxito: Mostrar alerta de JavaScript
        echo "<script>
            window.alert('Registro actualizado con éxito');
            window.location.href = '../Views/AdministracionUsuario.php'; // Redirige a la página deseada
        </script>";
    } else {
        // Error: Mostrar mensaje de error
        echo "Error al actualizar el registro: " . $conexion->error;
    }
}
?>
