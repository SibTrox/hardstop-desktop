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
					<div class="cajatodo">
						<div class="prodtodo">
							<div class="gen">
								<img class="imgprod" src="img/prod/<?php echo $registro['imagen']; ?>">
							</div>
							<div class="prodinfo">
								<p class="nombreprod"><?php echo $registro['nombre'];?></p>
								<p class="stock">STOCK : <?php echo $registro['stock']; ?></p>
								<div class="abajo">
									<p class="precio">PRECIO $<?php echo $registro['precio']; ?></p>
									<input type="submit" class="botoncompra" name="comprar" value="COMPRAR">
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
					
				
				
	<?php include("includes/footer.html"); ?>
		
</div>
<script src="js/login.js"></script>
<script src="js/main.js"></script>
<div style=display:none;>
</body>
</html>