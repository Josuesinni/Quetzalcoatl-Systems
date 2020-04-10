<?php
//Varibales adquiriendo el valor de los datos del formulario de contacto
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$msg=$_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" .phpversion(). " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/pain";

$mensaje= "Este mensaje fue enviado por: " .$nombre . ",\ r\n";
$mensaje .= "Su e-mail es:" . $mail . " \r\n";
$mensaje .= "Asunto: ".$asunto." \r\n";
$mensaje .= "Mensaje: ". $_POST['mensaje']. " \r\n";
$mensaje .= "Enviado el ".date('d/m/Y',time());

$para= 'josueanimations@gmail.com';
$asunto= 'Mensaje del sitio web';

if (mail($para, $asunto, utf8_decode($mensaje),$header))
echo "<script type='text/javascript>'alert('Tu mensaje ha sido enviado');</script>";
echo "<script type='text/javascript'>window.location.href='http://localhost/www/Urias_Proyectos/Ad3/index.php';</script>";
?>