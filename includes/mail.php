<?php
$asunto = "Bienvenido a HardStop"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Hardstop</title> 
</head> 
<body> 
<h1>Hola '.$nombre.', bienvenido a Hardstop!</h1> 
<p> 
<b>Bienvenido a HardStop</b>. Estamos encantados de que te hayas registrado en la mejor pagina de venta de hardware de Argentina, aun te falta un paso, y es confirmar tu cuenta. Por favor ingresa al enlance debajo de este mensaje.
</p> 
<h3> http://hardstopp.000webhostapp.com/index.php?cod_unlock='.$cod.'</h3>
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Equipo de HardStop <no-responder@hardstop.com>\r\n"; 


mail($mail,$asunto,$cuerpo,$headers) 
?>