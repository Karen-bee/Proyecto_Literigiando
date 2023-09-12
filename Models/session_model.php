<?php 
include( 'conexion.php' );
    class session_model2 {
        public function cerrar_sesion(){
            session_start();
            session_unset();
            session_destroy();
        }
    }

?>