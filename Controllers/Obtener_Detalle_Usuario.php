<?php
include '../Models/conexion.php';

if (isset($_GET['idusuario'])) {
    $idUsuario = $_GET['idusuario'];

    $sql = "SELECT * FROM usuario WHERE idusuario = $idUsuario";
    $result = $conexion->query($sql);

    if ($result->num_rows == 1) {
        $userDetails = $result->fetch_assoc();
        echo json_encode($userDetails);
    } else {
        echo json_encode(['error' => 'Usuario no encontrado']);
    }
} else {
    echo json_encode(['error' => 'ID de usuario no proporcionado']);
}
?>
