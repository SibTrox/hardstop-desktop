<?php
$server="localhost";
$user="root";
$pass="";
$db="hardstop";
$conexion=new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
	die('error de conexion'.$conexion->connect_errno);
}
/*else{
	echo 'conectado '.$conexion->host_info;
}
*/



?>