<?php 
    if (isset($_POST['nombre'])) {
        $nombre = ($_POST['nombre']);
        setcookie('usuario', $nombre, time() + 3600);
    } else {
        if (isset($_COOKIE['usuario'])) {
            $nombre = $_COOKIE['usuario'];
        }
    }
?>