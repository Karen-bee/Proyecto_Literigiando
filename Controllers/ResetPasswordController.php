<?php

include("../Models/Conexion.php");

include '../Controllers/ValidarEmail.php';




if (isset($_POST["reset_password"])) {

    $url = $_SERVER['REQUEST_URI'];
    $parts = explode('=', $url);
    $valorDespuesDelIgual = $parts[1];


    $correo_usuario = $_POST["correo_usuario"];
    $nueva_contraseña = $_POST["nueva_contraseña"];
    $confirmar_contraseña = $_POST["confirmar_contraseña"];



    // Validación de contraseñas
    if ($nueva_contraseña != $confirmar_contraseña) {
        echo "Las contraseñas no coinciden. Por favor, inténtelo de nuevo.";
        exit;
    }



    // Consultar si el usuario existe
    $sql = "SELECT * FROM usuario WHERE correo_usuario = '$correo_usuario'";


    $resultado_email = mysqli_query($conexion, $sql);
    $cant_duplicidad = mysqli_num_rows($resultado_email);
    //$row = $resultado_email->fetch_assoc();



    if ($cant_duplicidad > 0) {
        // El usuario existe, actualiza la contraseña
        $md5_hash = md5($nueva_contraseña);
        $sha256_hash = hash('sha256', $md5_hash);

        $sql_edit_computer = "UPDATE usuario SET password = '$sha256_hash', Fecha_registro = NOW() WHERE correo_usuario = '$correo_usuario'";
        $resultTotalEdit_computer = $conexion->query($sql_edit_computer);

        if ($resultTotalEdit_computer) {
            echo '<script>
            alert("CONTRASEÑA RESTABLECIDA CORRECTAMENTE");
            window.location= "../Views/login.php"</script>';
        } else {
            echo '<script>
            alert("ERROR AL RESTABLECER CONTRASEÑA");
            window.location= "../Views/reset_password.php"</script>';
        }
    } else {
        echo '<script>
        alert("USUARIO NO ENCONTRADO");
        window.location= "../Views/reset_password.php"</script>';
    }

    $conexion->close();
}
