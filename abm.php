<?php
session_start();
if(isset($_SESSION['admin'])){
	require_once("sql/conexion.php");
}else{
	header('Location: login-abm.php');
}

?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<link rel="stylesheet" type="text/css" href="css/abm.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	
	
	<title>Administracion productos</title>
	

</head>
<body>
<div id="contenedor">

<header>
	<div class="imagen-header">
	<img src="img/logohd.png" class="logo">
	<?php
	include("includes/form.html");
	?>
	</div>
</header>
<?php

?><div class="caja-body">
	<?php
include("includes/menu.html");
if (isset($_POST['insertar'])) {
    
	include("includes/insert.php");
}

if(isset($_GET['id'])){
	include("includes/delete.php");
}

if(isset($_POST['modificar'])){
	include("includes/edit.php");
}
include("includes/tabla.php");
?>
</div>
<?php

if(isset($m)){
	switch ($m) {
		case '1':
			echo '<script> alert("Registro insertado")</script>';
			break;
		case '2':
			echo '<script> alert("Error al insertar")</script>';
			break;
		case '3':
			echo '<script> alert("Registro borrado")</script>';
			break;
		case '4':
			echo '<script> alert("Error al borrar")</script>';
			break;
		case '5':
			echo '<script> alert("Registro modificado")</script>';
			break;
		case '6':
			echo '<script> alert("Error al modificar")</script>';
			break;		
	}
}
?>
<div style=display:none;>

</body>

</html>