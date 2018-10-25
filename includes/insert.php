<?php
	require("redimensionar.php");
include("../sql/conexion.php");
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$desc=$_POST['descripcion'];
$stock=$_POST['stock'];
$tipo=$_POST['tipo'];


/*if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		 $directorio = $_SERVER['DOCUMENT_ROOT'].'/h/img/prod/';
		move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$_FILES['imagen']['name']);
		$foto=$_FILES['imagen']['name'];
		$nombre_img=redimensionarImagen($foto,300,150);
		
}*/

if(is_uploaded_file($_FILES['imagen']['tmp_name'])){

	$directorio = 'img/prod/';
	$foto=$_FILES['imagen']['name'];
	$maxAncho = 300;
	$maxAlto=150;

	move_uploaded_file($_FILES['imagen']['tmp_name'], $foto);
	$img=redimensionarImagen($foto,$maxAncho,$maxAlto,'center');
	
	if(isset($img)){
    unlink($foto);
	}else{
		$img="";
	}
		
}

$sql="INSERT INTO productos (nombre,descripcion,imagen,precio,stock,tipo) VALUES ('$nombre','$desc','$img','$precio','$stock','$tipo')";

$insertar=$conexion->query($sql)? $m=1 : $m=2;
echo "<script>alert('funca');</script>";
//echo "<script>window.location='../abm.php'</script>";

?>