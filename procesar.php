<?php 
// INGRESE EL EMAIL DONDE RECIBIR� LOS DATOS DEL FOMULARIO
$para = 'fizhart@gmail.com'; 

$asunto = $_POST["tipo"]; 
$mailheader = "From: ".$_POST["email"]."\r\n"; 
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Nombre: ".$_POST["nombre"]."<br>"; 
$MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>"; 
$MESSAGE_BODY .= "Telefono: ".$_POST["telefono"]."<br>"; 
$MESSAGE_BODY .= "Tipo de contacto: ".$_POST["tipo"]."<br>";
$MESSAGE_BODY .= "Mensaje: ".nl2br($_POST["mensaje"])."<br>"; 
mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die ("Error al enviar el Formulario !"); 

//MODIFICAR A LA DIRECCI�N EN SU SERVIDOR
header( 'Location: http://www.fizharts.com.mx/gracias.html' )
?>