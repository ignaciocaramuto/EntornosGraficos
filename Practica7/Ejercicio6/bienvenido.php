<?php 
    session_start();
    if (isset($_SESSION['nombre'])) {
        echo 'Bienvenido/a '. $_SESSION['nombre'];
    } else {
        echo 'No tienes acceso a esta página';
    }
?>