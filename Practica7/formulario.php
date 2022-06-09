<?php 
    include 'script.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 7 - Ejercicio 1</title>
</head>
<body>
    <form action="script.php" method="POST">
    <label for="colores">Elige un color de fondo:</label>
    <select name="colores" id="colores">
        <option value="white" <?php if ($value == 'white') echo ' selected="selected"'; ?>>Blanco</option>
        <option value="green" <?php if ($value == 'green') echo ' selected="selected"'; ?>>Verde</option>
        <option value="yellow" <?php if ($value == 'yellow') echo ' selected="selected"'; ?>>Amarillo</option>
        <option value="red" <?php if ($value == 'red') echo ' selected="selected"'; ?>>Rojo</option>
        <option value="blue" <?php if ($value == 'blue') echo ' selected="selected"'; ?>>Azul</option>
        <option value="magenta" <?php if ($value == 'magenta') echo ' selected="selected"'; ?>>Violeta</option>
    </select>
    <br><br>
    <input type="submit" value="Guardar">
    </form>
    <?php 
        if (isset($value)) {
            echo '<body style="background-color:'.$value.'">';
        };
    ?>
</body>
</html>