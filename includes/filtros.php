<?php
if(isset($_GET['c'])){
$orden=$_GET['c'];
$sql="SELECT * FROM productos ORDER BY $orden";
}
else
{
	$sql="SELECT * FROM productos";
}

if(isset($_GET['mostrar'])){
	$tipo = $_GET['tipo'];
	if ($tipo!="0") {
		$sql="SELECT * FROM productos WHERE tipo='$tipo'";
	}else{
		$sql="SELECT * FROM productos";
	}
}
if(isset($_GET['tipo']) && isset($_GET['c'])){
	$tipo=$_GET['tipo'];
	$criterio=$_GET['c'];
	$sql="SELECT * FROM prodcutos WHERE tipo='$tipo' ORDER BY $criterio";
}

if(isset($_GET['buscar']) && isset($_GET['tipo'])){
	$tipo=$_GET['tipo'];
	$palabra=$_GET['p_buscar'];
	$sql="SELECT * FROM productos WHERE tipo='$tipo' AND nombre like '%$palabra%' OR tipo='$tipo' AND descripcion like '%palabra%'";
}
if(isset($_GET['buscar']) && !isset($_GET['tipo'])){
	$palabra=$_GET['p_buscar'];
	$sql="SELECT * FROM productos WHERE  nombre like '%$palabra%' OR  descripcion like '%palabra%'";

}




$consulta=$conexion->query($sql);
?>
