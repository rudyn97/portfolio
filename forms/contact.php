<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$para = 'rudyn97guerrero@gmail.com';
$titulo = 'Nuevo mensaje de contacto';
$mensaje_correo = 'Nombre: '.$name.' y correo: '.$email.' asunto: '.$subject.' y mensaje: '.$message.'';

$headers = 'From: '.$correo."\r\n".'Reply-to: '.$correo."\r\n".'X-Mailer: PHP/'.phpversion();

if (mail($para, $titulo, $mensaje_correo, $headers)){
  echo "Your message has been sent. Thank you!";
}else {
  die( 'Error to send');
}

?>
