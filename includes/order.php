<?php
$orden=$_GET['c'];
$sql="SELECT * FROM productos ORDER BY $orden";
$consulta=$conexion->query($sql);
?>