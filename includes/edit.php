<?php
$id=$_POST['id_editar'];
$nombre=$_POST['nombre'];
$desc=$_POST['desc'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$tipo=$_REQUEST['tipo'];
//$foto2=$_POST['imagen'];
$sql="UPDATE productos SET nombre='$nombre', descripcion='$desc',precio='$precio', stock='$stock',tipo='$tipo' WHERE id_producto='$id'";

$edit=$conexion->query($sql)? $m=5 : $m=6;

?>