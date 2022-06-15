<?php 
    function consultaSql($query) {
        $conn = mysqli_connect("localhost", "root", "", "compras");
        $resultado = mysqli_query($conn, $query);
        mysqli_close($conn);
        return $resultado;
    }
?>