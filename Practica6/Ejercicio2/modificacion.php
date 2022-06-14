<?php
    include 'db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM ciudades WHERE id = '$id'";
        $resultado = consultaSql($query);
        if (!$resultado) {
            die('Error al recuperar id de ciudad');
        };
        $extraido = mysqli_fetch_array($resultado);
    };

    if (isset($_POST['editar-ciudad'])) {
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $habitantes = $_POST['habitantes'];
        $superficie = $_POST['superficie'];
        if(isset($_POST['checkbox'])) {
            $metro = 1;
        } else {
            $metro = 0;
        };
        $query2 = "UPDATE ciudades SET ciudad = '$ciudad', pais = '$pais', habitantes = '$habitantes', superficie = '$superficie', tieneMetro = '$metro' WHERE id = '$id'";
        $resultado2 = consultaSql($query2);
        if ($resultado2) {
            header('Location: menu.php');
        }
    }
?>


<div>
    <form action="modificacion.php?id=<?php echo $_GET['id'] ?>" method="post" class="form">
        <input class="form-control" type="text" name="ciudad" value="<?php echo $extraido['ciudad']; ?>" placeholder="Ciudad">
        <input class="form-control" type="text" name="pais" value="<?php echo $extraido['pais']; ?>" placeholder="País">
        <input class="form-control" type="text" name="habitantes" value="<?php echo $extraido['habitantes']; ?>" placeholder="Habitantes">
        <input class="form-control" type="text" name="superficie" value="<?php echo $extraido['superficie']; ?>" placeholder="Superficie">
        <div class="tiene-metro">
            <label for="metro">¿Tiene metro?</label>
            <input type="checkbox" name="checkbox" <?php if ($extraido['tieneMetro']) echo 'checked' ?> >
        </div>
        <button type="submit" name="editar-ciudad" class="btn btn-success">Actualizar</button>
    </form>
</div>