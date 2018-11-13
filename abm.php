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
	<link rel="stylesheet" href="icon/iconabm/style.css">
	
	<title>Administracion productos</title>
	

</head>
<body>
<div id="contenedor">

<header>
	<div class="imagen-header">
	<img src="img/logohd.png" class="logo">
	<?php
	include("includes/menu.html");
	?>
	</div>
</header>
<?php

?><div class="caja-body">
	<div class="caja-header">
	<form action="abm.php" method="get" class="formfiltro">	
	<select name="tipo" class="selectfiltro">
		<option value="0">Todos</option>
		<option value="2">CPU</option>
		<option value="3">Coolers</option>
		<option value="4">Mothers y combos</option>
		<option value="5">RAM</option>
		<option value="6">GPU</option>
		<option value="7">Fuente</option>
		<option value="8">Almacenamiento</option>
		<option value="9">Monitores</option>
		<option value="10">Perifericos</option>
		<option value="11">Gabinete</option>		
	</select>	
	<input type="submit" name="mostrar" value="Filtrar">
</form>
<form action="abm.php" method="get" class="formfiltro">
	<?php
	if (isset($_GET['grupo'])) {
	echo '<input type="hidden" name="grupo" value="'.$_GET['grupo'].'">';
	}
	?>
	<input type="hidden" name="grupo" value="">
	<input type="text" name="p_buscar" placeholder="Palabra a buscar" >
	<input type="submit" name="buscar" value="Buscar" class="buscar">
</form>
	<?php
if (isset($_GET['tabla'])) {
	$tabla=$_GET['tabla'];
	if ($tabla==1) {
		include("includes/form.html");
				
	}
	else {
		include("includes/form2.html");	
	}
}
else {
	include("includes/form.html");	
}
?>
</div>
	



<?php

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