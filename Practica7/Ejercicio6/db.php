<?php 
    function consultaSql($query) {
        $conn = mysqli_connect('localhost', 'root', '', 'base2');
        $resultado = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $resultado;
    }
?>