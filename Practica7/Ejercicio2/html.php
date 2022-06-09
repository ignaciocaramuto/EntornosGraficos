<?php 
    include 'contador.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7 - Ejercicio 2</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["contador"])) {
            echo 'Has visitado esta página ' . $contador . ' veces';
        } else {
            echo '<h1>¡Bienvenido!</h1>';
        }
    ?>
</body>
</html>