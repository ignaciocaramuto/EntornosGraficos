<?php 
    function consultaSql($consulta) {
        $conn = mysqli_connect('localhost', 'root', '', 'capitales');
        $resultado = mysqli_query($conn, $consulta);
        mysqli_close($conn);
        return $resultado;
    }
    
?>