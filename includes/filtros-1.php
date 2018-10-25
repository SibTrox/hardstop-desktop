<?php
if(isset($_GET['buscar'])){
	$palabra=$_GET['p_buscar'];
	$sql="SELECT * FROM productos WHERE  nombre like '%$palabra%' OR  descripcion like '%palabra%'";
}
elseif(isset($_GET['tipo'])){
	$tipo = $_GET['tipo'];
	
		$sql="SELECT * FROM productos WHERE tipo='$tipo'";
}else{
	
		$sql="SELECT * FROM productos WHERE tipo<12";
}



$consulta=$conexion->query($sql);
?>
