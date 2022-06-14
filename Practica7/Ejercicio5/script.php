<?php
    session_start();
    if(isset($_POST['guardar'])) {
        $_SESSION['usuario'] = $_POST['usuario'];
        $_SESSION['contraseña'] = $_POST['contraseña'];
        header('Location: recuperar_datos.php');
    }
?>