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
	<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.1/angular.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js'></script>
		<link rel="stylesheet" type="text/css" href="css/lista.css" />
	<LINK REL=StyleSheet HREF="css/stylexd.css">
	<LINK REL=StyleSheet HREF="css/footer.css">
	<LINK REL=StyleSheet HREF="css/nav.css">
	<LINK REL=StyleSheet HREF="css/header.css">
	<LINK REL=StyleSheet HREF="css/login.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/prodselc.css">
	<link rel="stylesheet" href="css/creditcard.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	
	
					<?php
					include("sql/conexion.php");
					include("sql/select.php");
					$sel="SELECT * FROM productos WHERE id_producto='".$_REQUEST['c']."'";
					$consul = $conexion->query($sel);
					
					while($registro = $consul->fetch_assoc()){
					if ($_REQUEST['c']==$registro['id_producto']){
					?>
					<div id="cajatodo" class="cajatodo">
						<div class="prodtodo">
							<div class="gen">
								<img class="imgprod" src="img/prod/<?php echo $registro['imagen']; ?>">
							</div>
							<div class="prodinfo">
								<p class="nombreprod"><?php echo $registro['nombre'];?></p>
								<p class="stock">STOCK : <?php echo $registro['stock']; ?></p>
								<div class="abajo">
									<p class="precio">PRECIO $<?php echo $precio = $registro['precio']; ?></p>
									<form action="#" method="get">
										<input name="compra" type="submit" class="botoncompra" value="COMPRAR">
									</form>
									<img class="medios" src="img/medios.PNG">
								</div>
							</div>
						</div>
						<div class="desc">
							<p class="tdesc">Descripcion del producto</p>
							<hr  noshade="noshade" size="1" color="black" class="linea1"/>
							<p class="infodesc"><?php echo $registro['descripcion']; ?></p>
						</div>
						<p class="prodsparecidos">productos relacionados</p>
						<hr  noshade="noshade" size="1" color="black" class="linea2"/>
						<div class="prodcajatodo">
							<?php
							$selcat="SELECT * FROM productos WHERE tipo='".$registro['tipo']."' LIMIT 3";
							$select = $conexion->query($selcat);
						
							while($registrocat = $select->fetch_assoc()){
								if ($_REQUEST['c']!=$registrocat['id_producto']){
							?>

							<div class="otrosprods">
								<a href="productoselect.php?c=<?php echo $registrocat['id_producto'];?>" class="link" >
								<img class="imgprod2" src="img/prod/<?php echo $registrocat['imagen']; ?>">
								<p class="nombreprod2"><?php echo $registrocat['nombre'];?></p>
								<p class="prec">PRECIO $<?php echo $registrocat['precio']; ?></p>
								<p class="sto">STOCK : <?php echo $registrocat['stock']; ?></p>
								</a>			
							</div>
							<?php
								}
								
								}
								
							}
						}
						?>

						</div>
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
					
				
				
	<?php 
	include("includes/footer.html");
	if(isset($_REQUEST['cancelar'])){
		echo "<script> document.getElementById('terminacompra').classList.remove('ocultar') </script>";
		echo "<script> window.location = 'index.php' </script>";
	}
	if(isset($_REQUEST['proceder'])){
						echo "<script> document.getElementById('terminacompra').classList.remove('ocultar') </script>";
						echo '<script> swal(
							"Gracias por confiar en Hardstop!",
							"En breve recibiras mas informaciones sobre tu compra en tu correo electronico!",
							"success"
							)
							.then((value) => {
								window.location = "index.php" 
							}) </script> ';
	}
	if(isset($_REQUEST['creditcard'])){
		echo "<script> ocultarCajaTarjeta() </script>";
	}
	if(isset($_REQUEST['compra'])){
		echo "<script> ocultarCajaCompra() </script>";

		if($_SESSION['usuario']){
			

		}else{
			echo '<script> swal ( "Oops" ,  "Debes iniciar sesion antes de realizar esta accion!" ,  "error" )
			.then((value) => {
				window.location = "index.php" 
			}) </script> ';
		}
	}
	?>
		
</div>
<div style=display:none;>
<script  src="js/index.js"></script>
</body>
</html>