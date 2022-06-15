<?php
    include 'db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM catalogo WHERE id = '$id'";
        $resultado = consultaSql($query);
        if (!$resultado) {
            die('Error al agregar');
        }
        $row = mysqli_fetch_array($resultado);
        echo $row['producto'];
    }
?>