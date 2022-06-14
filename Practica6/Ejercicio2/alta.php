<?php
    include 'db.php';
    if(isset($_POST['alta-ciudad'])) {
        $ciudad = $_POST['ciudad'];
        $pais = $_POST['pais'];
        $habitantes = $_POST['habitantes'];
        $superficie = $_POST['superficie'];
        if(isset($_POST['metro'])) {
            $metro = 1;
        } else {
            $metro = 0;
        };
        $consulta = "INSERT INTO ciudades(ciudad, pais, habitantes, superficie, tieneMetro) VALUES ('$ciudad', '$pais', '$habitantes', '$superficie', '$metro')";
        $resultado = consultaSql($consulta);
        if (!$resultado) {
            die('Error al crear ciudad');
        }
        header('Location: menu.php');
    }
?>