<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<?php
include '../Models/conexion.php';

if (isset($_POST["guardarUsuario"])) {
    $documento_usuario = 123456;
    $nuevoID = null;
    $nombreCompleto = $_POST['nombreCompleto'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $username = $_POST['username'];
    $tipoUsuario = $_POST['txt_tipoUsuario'];
    $pass = 123;
    $foto_perfil = '../Storage/Imagenes/Acosta.jpg';
    $idDocumento = 1;
    $idrolusuario = 2;
    $estado = 1; // Reemplazar 'SomeValue' con el valor apropiado

    $inserta = "INSERT INTO usuario (documento_usuario, 
    idusuario, nombrecompleto_usuario, direccion_usuario, telefono_usuario, username, 
    correo_usuario, password, estado, foto_usuario, Fecha_registro, idtipodedocumento, idrolusuario)
    VALUES('$documento_usuario', 
    '$nuevoID', '$nombreCompleto', '$direccion', '$telefono', '$username', '$email', '$pass', 
    '$estado', '$foto_perfil', NOW(),
    '$idDocumento', '$idrolusuario') ";

    // Ejecutar la consulta y verificar errores
    $resultado = mysqli_query($conexion, $inserta);

    if (!$resultado) {
        echo '<script>
                Swal.fire({
                  icon: "error",
                  title: "Error",
                  text: "No se guardó correctamente, verifique!",
                });
              </script>';
    } else {
        echo '<script>
                Swal.fire({
                  icon: "success",  // Cambiado a "success"
                  title: "Éxito",
                  text: "Se guardó correctamente!",
                });
                </script>';
        // Redirigir después del éxito usando PHP
        header("Location: ../Views/AdministracionUsuario.php");
        exit();
    }
}
?>
