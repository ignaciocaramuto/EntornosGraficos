<?php 
    if(isset($_POST['politica'])) {
        $titular = $_POST['politica'];
        setcookie('titular', $titular);
    }
    if (isset($_POST['economica'])) {
        $titular = $_POST['economica'];
        setcookie('titular', $titular);
    }
    if (isset($_POST['deportiva'])) {
        $titular = $_POST['deportiva'];
        setcookie('titular', $titular);
    }
    if (isset($_COOKIE['titular'])) {
        $titular = $_COOKIE['titular'];
    }
?>