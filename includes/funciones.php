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
	include("sql/conexion.php");
	if(isset($_SESSION['carrito'])){
	$prod_compra=$_SESSION['carrito'];
	$total=0;
	foreach ($prod_compra as $indice => $producto) {
		echo '<div class="lista-producto">';
		$enzo = "SELECT imagen FROM productos WHERE id_producto ='".$producto['id_producto']."'";
		$consulta = $conexion->query($enzo);
		while($imagen = $consulta->fetch_assoc()){
			echo "<img class='imagen-carrito' src='img/prod/".$imagen['imagen']."'>";
		}
		echo "<div class='lista-detalles'>";
		echo "<p><a class='detalles'>Descripcion : </a>".$producto['descripcion']."</p>";
		echo "<p><a class='detalles'>Precio : </a>".$producto['precio']."</p>";
		echo "<p><a class='detalles'>Cantidad : </a>".$producto['cant']."   ";
		if($producto['cant']==1){
			echo '<a href=carrito.php?id_suma='.$producto['id_producto'].'>sumar </a><br> ';
		}else{
			echo '<a href=carrito.php?id_resta='.$producto['id_producto'].'>restar !</a> ';
			echo '<a href=carrito.php?id_suma='.$producto['id_producto'].'>sumar </a></p> ';
		}
		$subtotal=$prod_compra[$indice]['cant']*$prod_compra[$indice]['precio'];
		echo "<p><a class='detalles'>Subtotal : </a>".$subtotal."</p>";
		echo "</div>";

		echo '<a href=carrito.php?id_borra='.$producto['id_producto'].' class="boton-borrar"><span class="icon-bin"></span></a><br>';
		$total=$total+($prod_compra[$indice]['cant']*$prod_compra[$indice]['precio']);
		echo '</div>';
	}	
	
	echo "Total: ".$total."<br>";
}else{
	echo "<h2 class='carrito-vacio'> Su carrito esta vacio ... por ahora </h2>";
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
	include("sql/conexion.php");
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
