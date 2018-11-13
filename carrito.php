<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>HardStop - Venta de Hardware al mejor precio</title>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<link rel="stylesheet" type="text/css" href="icon/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon3/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon4/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon5/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon6/style.css">
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/lista.css" />
	<LINK REL=StyleSheet HREF="css/stylexd.css">
	<LINK REL=StyleSheet HREF="css/footer.css">
	<LINK REL=StyleSheet HREF="css/nav.css">
	<LINK REL=StyleSheet HREF="css/header.css">
	<LINK REL=StyleSheet HREF="css/login.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/prodselc.css">
	<link rel="stylesheet" href="css/creditcard.css">
	<link rel="stylesheet" href="css/carrito.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script src="js/main.js"></script>
	<style type="text/css">
		
		.ocultar{
        	display: none;
        }
	</style>
	
</head>
<body>
<div id="container">
	<?php include("includes/header.php");?>
    <?php include("includes/nav.html"); ?>
    <h2 class="stockprod titulo">CARRITO </h2>
	<hr  noshade="noshade" size="1" color="black" class="linea3" />
<div id="terminacompra" class="ocultar">
	<h1 style="text-align: center; margin-top: 2%; margin-bottom:5%;">¿ Esta seguro de finalizar la compra ?</h1>
		<form method="get" action="#">
			<input type="submit" name="proceder" class="buyfinal" value="Terminar pago">
			<input type="submit" name="cancelar" class="buyfinal" value="Cancelar">
		</form>
	<h2 style="text-align: center;padding-top:10%;"> Al finalizar la compra, recibira todos los datos de su compra en su email </h2>
	<h2 style="text-align: center;"> Si aun tiene dudas , consulte el apartado de preguntas frecuentes </h2>
	<h2 style="text-align: center;margin-buttom:7%;"> Si no encuentra su duda , comuniquese con nosotros en el apartado de contacto</h2>
</div>
<div id="creditcard" class="ocultar">
<h1 style="text-align: center; margin-top: 1%;"> Complete su compra con nuestro sistema de pagos </h1>
<div class="container">
	<div class="col1">
		<div class="card">
		<div class="front">
			<div class="type">
			<img class="bankid"/>
			</div>
			<span class="chip"></span>
			<span class="card_number">&#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; &#x25CF;&#x25CF;&#x25CF;&#x25CF; </span>
			<div class="date"><span class="date_value">MM / YYYY</span></div>
			<span class="fullname">FULL NAME</span>
		</div>
		<div class="back">
			<div class="magnetic"></div>
			<div class="bar"></div>
			<span class="seccode">&#x25CF;&#x25CF;&#x25CF;</span>
			<span class="chip"></span><span class="disclaimer">This card is property of Random Bank of Random corporation. <br> If found please return to Random Bank of Random corporation - 21968 Paris, Verdi Street, 34 </span>
		</div>
		</div>
	</div>
<div class="col2">
			<form action="#" method="get">
				<label>Numero de tarjeta</label>
				<input class="number" required type="text" ng-model="ncard" maxlength="19" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
				<label>Nombre impreso en su tarjeta</label>
				<input class="inputname" required type="text" placeholder=""/>
				<label>Fecha de expiro</label>
				<input class="expire" required type="text" placeholder="MM / YYYY"/>
				<label>Numero de seguridad</label>
				<input class="ccv" required type="text" placeholder="CVC" maxlength="3" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
				<button name="creditcard" class="buy"><i class="material-icons">lock</i> Proceder al pago</button>
			</form>
		</div>
		</div>
	<h2 style="text-align: center; margin-bottom: 2%;"> Totalmente seguro </h1>
</div>
</div>
<div id="terminacompra" class="ocultar">
	<h1 style="text-align: center; margin-top: 2%; margin-bottom:5%;">¿ Esta seguro de finalizar la compra ?</h1>
		<form method="get" action="#">
			<input type="submit" name="proceder" class="buyfinal" value="Terminar pago">
			<input type="submit" name="cancelar" class="buyfinal" value="Cancelar">
		</form>
	<h2 style="text-align: center;padding-top:10%;"> Al finalizar la compra, recibira todos los datos de su compra en su email </h2>
	<h2 style="text-align: center;"> Si aun tiene dudas , consulte el apartado de preguntas frecuentes </h2>
	<h2 style="text-align: center;margin-buttom:7%;"> Si no encuentra su duda , comuniquese con nosotros en el apartado de contacto</h2>
</div>
<div id="carrito">
	<?php
			if(!isset($_SESSION['usuario'])){
				?> 
				<div class="carrito-nosesion">
				<h1> Lo sentimos! </h1>
				<h2> Pero para poder acceder al carrito, primero debe iniciar sesión </h2>
				<h2> Si todavia no posee una cuenta en HardStop, <a href="registro.php"> registrese haciendo click aqui </a> </h2>
				</div>
				<?php
			}else{
					if(isset($_GET['id_suma'])){
						sumarCantidad($_GET['id_suma']);
						}
			
					if(isset($_GET['id_resta'])){
						restarCantidad($_GET['id_resta']);
						}
			
					if(isset($_GET['id_borra'])){
						borrarProd($_GET['id_borra']);
						}
			mostrarCarrito();
		}
		echo "</div>"; 
		include("includes/footer.html");
	?>
<script src="js/main.js"></script>
<script  src="js/index.js"></script>
<?php
	if(isset($_REQUEST['compra'])){
			echo "<script> ocultarCajaCompraEnCarrito() </script>";
		}
	if(isset($_REQUEST['creditcard'])){
		echo "<script> ocultarCajaTarjetaEnCarrito() </script>";
	}
	if(isset($_REQUEST['cancelar'])){
		echo "<script> document.getElementById('terminacompra').classList.remove('ocultar') </script>";
		echo "<script> window.location = 'index.php' </script>";
	}
	if(isset($_REQUEST['proceder'])){
		include("sql/conexion.php");
		//Obtener Id del usuario que realizo la compra
		$selecuser="SELECT id_registro FROM registros WHERE mail='".$_SESSION['usuario']."'";
		$selventa=$conexion->query($selecuser);
		$prod_compra=$_SESSION['carrito'];
		while($userven=$selventa->fetch_assoc()){
			$insertvet="INSERT INTO ventas(id_usuario,total) VALUES ('".$userven["id_registro"]."','".$_SESSION['total']."')";
			$insertven = $conexion->query($insertvet);
			$seleccionar = "SELECT id_venta FROM ventas ORDER BY id_venta DESC LIMIT 1";
			$conter = $conexion->query($seleccionar);
			while($cuevas = $conter->fetch_assoc()){
				foreach ($prod_compra as $indice => $producto) {
					$xd = "INSERT INTO prodxventa(cant,id_venta,id_prod) VALUES ('".$producto['cant']."','".$cuevas['id_venta']."','".$producto['id_producto']."')";
					$insertarxd = $conexion->query($xd);
				}
			}
		}
		unset($_SESSION['carrito']);
		echo "<script> document.getElementById('terminacompra').classList.remove('ocultar') </script>";
		echo "<script> document.getElementById('carrito').classList.add('ocultar') </script>";
		
		echo '<script> swal(
			"Gracias por confiar en Hardstop!",
			"En breve recibiras mas informaciones sobre tu compra en tu correo electronico!",
			"success"
			)
			.then((value) => {
				window.location = "index.php" 
			}) </script> ';
}
?>
<div style=display:none;>
</body>
</html>