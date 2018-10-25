<?php 
require_once("sql/conexion.php");

?>
 <!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/form.css">
	<link rel="stylesheet" type="text/css" href="css/table.css">
	<title>Administracion productos</title>
	

</head>
<body>
<div id="contenedor">

<header></header>
<?php
include("includes/form.html");

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