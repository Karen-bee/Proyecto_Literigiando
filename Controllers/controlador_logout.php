<?php
require_once '../Models/session_model.php' ;
$objeto = new session_model2();
$objeto->cerrar_sesion();
header('Location: ../Views/login.php');
?>