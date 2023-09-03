<?php

$conexion = mysqli_connect("localhost","root","","literagiando2");

if($conexion){
    echo 'Conectado exitosamente a la BD';
}else{
    echo 'No se conecto con la BD';
}

?>
