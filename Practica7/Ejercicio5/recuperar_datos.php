<?php 
    session_start();
    if (isset($_SESSION['usuario']) && isset($_SESSION['contraseña'])) {
        echo 'Su nombre de usuario es: ' . $_SESSION['usuario'] . '</br>';
        echo 'Su contraseña es: ' . $_SESSION['contraseña'] . '</br>';
    }
?>

<a href="formulario.php">Volver al formulario</a>