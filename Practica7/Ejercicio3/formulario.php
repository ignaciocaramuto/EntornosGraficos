<?php 
    include 'script.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7 - Ejercicio 3</title>
</head>
<body>
    <form action="script.php" method="post">
        <label for="nombre">Ingrese su nombre de usuario: </label>
        <input type="text" name="nombre" id="nombre" <?php if (isset($_COOKIE['usuario'])) echo 'value="'.$nombre.'"' ?>>
        <input type="submit" value="Guardar">
    </form>
</body>
</html>