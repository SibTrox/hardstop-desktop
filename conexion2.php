<?php
$server="localhost";
$user="id6891590_poronga";
$pass="pija777";
$db="id6891590_hardstop";
$conexion=new mysqli($server,$user,$pass,$db);

if($conexion->connect_errno){
	die('error de conexion'.$conexion->connect_errno);
}
/*else{
	echo 'conectado '.$conexion->host_info;
}
*/



?>