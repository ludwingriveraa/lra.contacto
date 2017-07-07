<?php 
    $destino = "ludwing.ra@gmail.com";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $contenido = "Nombre: " .$name . "\nCorreo: " . $email . "\nMensaje: " . $message;
    
    mail($destino,"Contacto consulta",$contenido);

    header("location:gracias.html")
?>