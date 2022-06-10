<?php 
 include 'script.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="script.php" method="post">
        <p>Elije un titular: </p>
        <input type="radio" id="politica" name="politica" value="politica">
        <label for="css">Noticia política</label><br>
        <input type="radio" id="economica" name="economica" value="economica">
        <label for="css">Noticia económica</label><br>
        <input type="radio" id="deportiva" name="deportiva" value="deportiva">
        <label for="javascript">Noticia deportiva</label>
        <input type="submit" value="Guardar">
    </form>
    <?php 
        if (isset($_COOKIE['titular'])) {
            if($titular == 'politica') {
                echo '<h1>Noticia política</h1>';
            }
            if($titular == 'economica') {
                echo '<h1>Noticia económica</h1>';
            }
            if($titular == 'deportiva') {
                echo '<h1>Noticia deportiva</h1>';
            }
        } else {
            echo '<h1>Noticia política</h1>';
            echo '<h1>Noticia económica</h1>';
            echo '<h1>Noticia deportiva</h1>';
        }
    ?> 
</body>
</html>