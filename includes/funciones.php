<?php 

function agregarPrimerProducto($id){
	include("sql/conexion.php");
	$sql="SELECT * FROM productos WHERE id_producto=".$id."";
	$consulta=$conexion->query($sql);
	while($registro=$consulta->fetch_array()){
		$Id_prod=$registro['id_producto'];
		$Descripcion=$registro['descripcion'];
		$Precio=$registro['precio'];
		$Cantidad=1;	
	}
	$nuevo_Prod[]=array('id_producto'=>$Id_prod, 'descripcion'=>$Descripcion, 'precio'=>$Precio, 'cant'=>$Cantidad);
	return $nuevo_Prod;
    $consulta->free();
	$conexion->close();
}

function mostrarCarrito(){
	if(isset($_SESSION['carrito'])){
	$prod_compra=$_SESSION['carrito'];
	$total=0;
	foreach ($prod_compra as $indice => $producto) {
		echo "id: ".$producto['id_producto']."<br>";
		echo "descripcion: ".$producto['descripcion']."<br>";
		echo "precio: ".$producto['precio']."<br>";
		echo "cantidad: ".$producto['cant']."<br>";

		if($producto['cant']==1){
			echo '<a href=carrito.php?id_suma='.$producto['id_producto'].'>sumar </a><br> ';
		}else{
			echo '<a href=carrito.php?id_resta='.$producto['id_producto'].'>restar !</a> ';
			echo '<a href=carrito.php?id_suma='.$producto['id_producto'].'>sumar </a><br> ';
		}
		
		$subtotal=$prod_compra[$indice]['cant']*$prod_compra[$indice]['precio'];
		echo "Subtotal: ".$subtotal."<br><br>";
		echo '<a href=carrito.php?id_borra='.$producto['id_producto'].'>eliminar Producto </a> <br>';
		$total=$total+($prod_compra[$indice]['cant']*$prod_compra[$indice]['precio']);
	}	
	echo "Total: ".$total."<br>";
}else{
	echo "carrito vacio";
}
}


function buscarProductoenCarrito($id){
	$prod_compra=$_SESSION['carrito'];
	$existe=0;
	foreach ($prod_compra as $indice =>$producto) {
		 if($producto['id_producto']==$id){
			$existe=1;
			$prod_compra[$indice]['cant']++;		
		}	
	}
	$_SESSION['carrito']=$prod_compra;
	return $existe;
	}

function agregarNuevoProducto($id){
	$prod_compra=$_SESSION['carrito'];
	include("conexion.php");
	$sql="SELECT * FROM productos WHERE id_producto=".$id."";
	$consulta=$conexion->query($sql);
	while($registro=$consulta->fetch_array()){
		$Id_prod=$registro['id_producto'];
		$Descripcion=$registro['descripcion'];
		$Precio=$registro['precio'];
		$Cantidad=1;	
	}
	$nuevo_elem=array('id_producto'=>$Id_prod, 'descripcion'=>$Descripcion, 'precio'=>$Precio, 'cant'=>$Cantidad);
	array_push($prod_compra, $nuevo_elem);

	$_SESSION['carrito']=$prod_compra;

	$consulta->free();
	$conexion->close();
}

function sumarCantidad($id){
	$prod_compra=$_SESSION['carrito'];
	foreach ($prod_compra as $indice => $producto) {
		if($producto['id_producto']==$id){
			$prod_compra[$indice]['cant']++;
	}
}
$_SESSION['carrito']=$prod_compra;
header("location:carritogb.php");
}

function restarCantidad($id){
	$prod_compra=$_SESSION['carrito'];
	foreach ($prod_compra as $indice => $producto) {
		if($producto['id_producto']==$id){
			$prod_compra[$indice]['cant']--;
	}
}
$_SESSION['carrito']=$prod_compra;
header("location:carritogb.php");
}

function borrarProd($id){
	$prod_compra=$_SESSION['carrito'];
	foreach ($prod_compra as $indice => $producto) {
		if($producto['id_producto']==$id){
			unset($prod_compra[$indice]);

	}
}
    if((count($prod_compra))==0){
                    unset($_SESSION['carrito']);
                    unset($prod_compra);
                }else{
    $_SESSION['carrito']=$prod_compra;
    }
}
 ?>
