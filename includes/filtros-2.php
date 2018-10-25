<?php

if(isset($_GET['tipo'])){
	$tipo = $_GET['tipo'];
	
		$sql="SELECT * FROM productos WHERE tipo='$tipo'";
}else{
		$sql="SELECT * FROM productos WHERE tipo>=12";
}


$consulta=$conexion->query($sql);
?>
