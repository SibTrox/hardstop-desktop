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
	<?php include("includes/header.html"); ?>
	<?php include("includes/nav.html"); ?>
	
	
					<?php
					include("sql/conexion.php");
					include("sql/select.php");
					while($registro = $consulta->fetch_assoc()){
					if ($_REQUEST['c']==$registro['id_producto']){?>
					<a href="" class="link"><div class="gen">
					<img class="imgprod" src="img/prod/<?php echo $registro['imagen']; ?>">
					<div class="productosinfo">
					<h2 class="nombreprod"><?php echo $registro['nombre'];?></h2>
					<h4>PRECIO $<?php echo $registro['precio']; ?></h4>
					<h4>Descripcion del producto: <?php echo $registro['descripcion']; ?></h4>		
					<h4>STOCK: <?php echo $registro['stock']; ?></h4></div>
					</div></a><?php
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