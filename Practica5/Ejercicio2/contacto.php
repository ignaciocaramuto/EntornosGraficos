<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Entornos Graficos - Practica 5</h1>
    <br>
    <p>Ejercicio 2</p>
    <form action="enviar.php" method="post">
    <fieldset>
        <p>
            <label> Nombre <input type="text" name="nombre" size="25" /></label>
        </p>
        <p>
            <label> Email <input type="text" name="email" size="25" /></label>
        </p>
        Comentario
        <p>
            <label>
                <textarea name="texto" cols="32" rows="6"></textarea>
            </label>
        </p>
        <input type="submit" value="Enviar"/>
    </fieldset>
    </form> 
</body>
</html>