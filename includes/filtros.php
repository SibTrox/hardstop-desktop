<?php

if(isset($_GET['c'])){
$orden=$_GET['c'];
$tabla=$_REQUEST['tabla'];
switch ($tabla) {
	case 1:
		$sql="SELECT * FROM productos ORDER BY $orden";
		break;
	case 2:
		$sql="SELECT * FROM registros ORDER BY $orden";
		break;
	/*case 3:
		$sql="SELECT * FROM ventas ORDER BY $orden";
		break;*/
	default:
		# code...
		break;
}

}
else
{
	$tabla=$_REQUEST['tabla'];
	switch ($tabla) {
		case 1:
			$sql="SELECT * FROM productos";
			break;
		case 2:
			$sql="SELECT * FROM registros";
			break;
		case 3:
			$sql="SELECT p.id_prodxventa , p.cant , p.id_ventas , p.id_prod , v.fecha , v.id_usuario , v.total , v.id_venta 
			FROM prodxventa p
			JOIN ventas	v
			ON p.id_ventas = v.id_venta";
			
			break;
		default:
			# code...
			break;
	}
	
}
$tabla=$_REQUEST['tabla'];
if(!isset($_REQUEST['tabla'])){
	$sql="SELECT * FROM productos";
}



if(isset($_GET['mostrar'])){
	$tipo = $_GET['tipo'];
	if ($tipo!=0) {
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
