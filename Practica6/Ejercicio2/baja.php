<?php
    include 'db.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "DELETE FROM ciudades WHERE id = '$id'";
        $resultado = consultaSql($query);
        if (!$resultado) {
            die('Error al eliminar ciudad');
        }
        header('Location: menu.php');
    }
?>