<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6 - Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    <?php include 'styles.css'; ?>
</style>
<body>
    <div class="container">
        <div class="add-city">
            <form action="alta.php" method="post" class="form">
                <input class="form-control" type="text" name="ciudad" placeholder="Ciudad">
                <input class="form-control" type="text" name="pais" placeholder="País">
                <input class="form-control" type="text" name="habitantes" placeholder="Habitantes">
                <input class="form-control" type="text" name="superficie" placeholder="Superficie">
                <div class="tiene-metro">
                    <label for="metro">¿Tiene metro?</label>
                    <input class="checkbox" type="checkbox" name="metro" id="metro">
                </div>
                <button type="submit" name="alta-ciudad" class="btn btn-success">Agregar</button>
            </form>
        </div>
        <div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th>Habitantes</th>
                    <th>Superficie</th>
                    <th>¿Tiene metro?</th>
                    <th>Acciones</th>
                </tr>
                <?php 
                    include 'db.php';
                    $consulta = 'SELECT * FROM ciudades';
                    $resultado = consultaSql($consulta);
                    if ($resultado) {
                        while ($row = mysqli_fetch_array($resultado)) { ?>
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['ciudad']?></td>
                                <td><?php echo $row['pais']?></td>
                                <td><?php echo $row['habitantes']?></td>
                                <td><?php echo $row['superficie']?></td>
                                <td><?php echo $row['tieneMetro']?></td>
                                <td>
                                    <a href="modificacion.php?id=<?php echo $row['id']?>">
                                        Editar
                                    </a>
                                    <a href="baja.php?id=<?php echo $row['id']?>">
                                        Eliminar
                                    </a>
                                </td>
                            </tr>
                        <?php }
                    }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>