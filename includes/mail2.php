<?php
$asunto = "Nueva consulta'.$asunto.' / Hardstop "; 
$cuerpo = ' 
<html> 
<head> 
   <title>Hardstop</title> 
</head> 
<body> 
<h1>Consulta de: '.$nombre. '</h1> 

<p>'.$email.' </p>
<p>'.$telefono.' </p>
<p>'.$asunto.' </p> 
<p> '.$mensaje.' </p>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: <$email> \r\n"; 

$email2= "trucador.lopez@gmail.com";
mail($email2,$asunto,$cuerpo,$headers) 
?>