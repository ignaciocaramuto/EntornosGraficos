<?php
    session_start();
    include 'db.php';
    if(isset($_POST['guardar'])) {
        $email = $_POST['email'];
        $query = "SELECT * FROM alumnos WHERE email = '$email'";
        $resultado = consultaSql($query);
        if (!$resultado) {
            die('Error en la consulta de email');
        }
        $row = mysqli_fetch_array($resultado);
        $_SESSION['nombre'] = $row['nombre'];
    }
?>

<a href="bienvenido.php">Ir a bienvenida</a>