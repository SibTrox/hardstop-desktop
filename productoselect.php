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
	<link rel="stylesheet" type="text/css" href="css/lista.css" />
	<LINK REL=StyleSheet HREF="css/stylexd.css">
	<LINK REL=StyleSheet HREF="css/footer.css">
	<LINK REL=StyleSheet HREF="css/nav.css">
	<LINK REL=StyleSheet HREF="css/header.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/prodselc.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	
	
</head>
<body>
	<div id="container">
	<?php include("includes/header.php"); ?>
	<?php include("includes/nav.html"); ?>
	
	
					<?php
					include("sql/conexion.php");
					include("sql/select.php");
					$sel="SELECT * FROM productos WHERE id_producto='".$_REQUEST['c']."'";
					$consul = $conexion->query($sel);
					
					while($registro = $consul->fetch_assoc()){
					if ($_REQUEST['c']==$registro['id_producto']){
					?>
					<div class="prodtodo">
					<div class="gen">
					<img class="imgprod" src="img/prod/<?php echo $registro['imagen']; ?>">
					</div>
					<div class="productosinfo">
					<p class="nombreprod"><?php echo $registro['nombre'];?></p>
					<p class="stock">STOCK : <?php echo $registro['stock']; ?></p>
					<p class="precio">PRECIO $<?php echo $registro['precio']; ?></p>
					<input type="submit" class="botoncompra" name="comprar" value="COMPRAR">
					</div>
					</div>
					<div class="desc">
					<p class="tdesc">Descripcion del producto</p>
					<hr  noshade="noshade" size="1" color="black" />
					<p class="infodesc"><?php echo $registro['descripcion']; ?></p>
					</div>
					<div class="otrosprods">
					<?php
					$selcat="SELECT id_producto,nombre,descripcion,stock,precio,imagen FROM productos WHERE tipo='".$registro['tipo']."' LIMIT 5";
					$select = $conexion->query($selcat);
					
					while($registrocat = $select->fetch_assoc()){
					?>
					<img class="" src="img/prod/<?php echo $registrocat['imagen']; ?>">
					<p class=""><?php echo $registrocat['nombre'];?></p>
					<p class="">PRECIO $<?php echo $registrocat['precio']; ?></p>
					<p class="">STOCK : <?php echo $registrocat['stock']; ?></p>

					
							
					</div>
					<?php
					}
						}
					}
					?>
					
				
				
	<?php include("includes/footer.html"); ?>
		
</div>
<script src="js/login.js"></script>
<script src="js/main.js"></script>
<div style=display:none;>
</body>
</html>