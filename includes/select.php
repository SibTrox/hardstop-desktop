<?php
if (isset($_GET('tabla'))) {
    $tabla= $_GET('tabla');
   switch ($tabla) {
       case '1':$sql ="SELECT * FROM productos";
       $consulta = $conexion->query($sql);
           break;
       
           case '2':$sql ="SELECT * FROM registros";
           $consulta = $conexion->query($sql);
               break;
           
               case '3':$sql ="SELECT * FROM ventas";
               $consulta = $conexion->query($sql);
                   break;
               
       default:
           # code...
           break;
   }
}
else{
$sql ="SELECT * FROM productos";
$consulta = $conexion->query($sql);
}
?>