<?php
    $destinatario = ($_POST["emailfriend"]);
    $asunto = "Recomendación";
    $amigo = ($_POST["friend"]);
    $desde = ($_POST["email"]);
    $texto = "$amigo te recomiendo este sitio";
    $headers .= "Content-type:text/html; charset=iso-8859- 1\r\n"; 
    $headers .= "From: $desde\r\n";

    mail($destinatario, $asunto, $texto, $headers);
?>