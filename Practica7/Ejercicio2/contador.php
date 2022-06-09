<?php
    if (!isset($_COOKIE["contador"])) {
        $contador = 0;
        setcookie("contador", $contador);
    } else {
        $contador = ++$_COOKIE["contador"];
        setcookie("contador", $contador);
    }
?>