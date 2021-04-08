<?php
$destinatario = 'vivianmacias0816@gmail.com'
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['message'];

$header = "Enviado desde la pagina de Constructora Divar SAS";
$mensajeCompleto = $email "\nMensaje: ". $message . "\nAtentamente: " .$nombre;

mail($destinatario, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>