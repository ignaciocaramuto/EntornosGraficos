<?php 

if (isset($_POST['colores'])) {
    $value = ($_POST['colores']);
    setcookie("estilo",$value,time() + 60 * 60);
} else {
    if (isset($_COOKIE["estilo"])) {
        $value = $_COOKIE["estilo"];
    }
}

?>