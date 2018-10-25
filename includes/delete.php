<?php
$id=$_GET['id'];
$sql2="SELECT * FROM productos where id:producto='$id";
$consulta=$conexion->query($sql2);
$sql="DELETE FROM productos WHERE id_producto='$id'";
$delete=$conexion->query($sql)? $m=3 : $m=4;
/*if($delete){
	$registro=$consulta->fetch_array();
	if(!empty($registro['foto'])){
		unlink("imagenes/".$registro['foto']);
	}
}
*/
?>