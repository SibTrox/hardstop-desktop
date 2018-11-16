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
		<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/lista.css" />
	<LINK REL=StyleSheet HREF="css/stylexd.css">
	<LINK REL=StyleSheet HREF="css/footer.css">
	<LINK REL=StyleSheet HREF="css/nav.css">
	<LINK REL=StyleSheet HREF="css/header.css">
	<LINK REL=StyleSheet HREF="css/login.css"> 
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/prodinfo.css">
	<script type="text/javascript" src="js/sweetalert.min.js"></script>
	<script src="js/main.js"></script>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<style type="text/css">
		
		.ocultar{
        	display: none;
        }
	</style>
</head>
<body>
	<div id="container">
	<?php include("includes/header.php"); ?>
	<?php include("includes/nav.html"); ?>
	<div id="slider" style="background-color:transparent;margin:0">
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/1.jpg" alt="" title="" id="wows1_0"/></li>
		<li><img src="data1/images/2.jpg" alt="bootstrap image slider" title="" id="wows1_1"/></li>
		<li><img src="data1/images/3.png" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/4.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/5.jpg" alt="" title="" id="wows1_2"/></li>
		<li><img src="data1/images/6.jpg" alt="" title="" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		
	</div></div><div class="ws_script" style="position:absolute;left:-99%"></div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	</div>
		
		
	<div class="flex-prod">
		<input type="checkbox" name="activar2" id="activar2">
		<div class="div-menu"><label class="icon-list2" for="activar2"></label><label class="text-menu">Categorias</label></div>
		<div class="lista">
				<ul class="ul-prod">
					<h1 class="categoria">Categorias</h1>
					
					<li class="li-prod"><a href="productos.php?tipo=2" class="a-categoria" name="mostrar" value="2">CPU</a></li>
					<li class="li-prod"><a href="productos.php?tipo=3" class="a-categoria" name="mostrar" value="3">Coolers</a></li>
					<li class="li-prod"><a href="productos.php?tipo=4" class="a-categoria" name="mostrar" value="4">Mothers y combos</a></li>
					<li class="li-prod"><a href="productos.php?tipo=5" class="a-categoria" name="mostrar" value="5">Memorias RAM</a></li>
					<li class="li-prod"><a href="productos.php?tipo=6" class="a-categoria" name="mostrar" value="6">Placas de video</a></li>
					<li class="li-prod"><a href="productos.php?tipo=7" class="a-categoria" name="mostrar" value="7">Fuentes</a></li>
					<li class="li-prod"><a href="productos.php?tipo=8" class="a-categoria" name="mostrar" value="8">Almacenamiento</a></li>
					<li class="li-prod"><a href="productos.php?tipo=9" class="a-categoria" name="mostrar" value="9">Monitores</a></li>
					<li class="li-prod"><a href="productos.php?tipo=10" class="a-categoria" name="mostrar" value="10">Perifericos</a></li>
					<li class="li-prod"><a href="productos.php?tipo=11" class="a-categoria" name="mostrar" value="11">Gabinetes</a></li>
					
					
					
				</ul>
		</div>
				<div class="productos">
					<?php
					include("sql/conexion.php");
					
					include("includes/filtros-1.php");
					while($registro = $consulta->fetch_assoc()){
					?>
					<a href="productoselect.php?c=<?php echo $registro['id_producto'];?>" class="link" ><div class="productosinfo">
					<img class="imgprod" src="img/prod/<?php echo $registro['imagen']; ?>">
					<h2 class="nombreprod"><?php echo $registro['nombre'];?></h2>
					<h4>PRECIO $<?php echo $registro['precio']; ?></h4>

					<h4>STOCK: <?php echo $registro['stock']; ?></h4>
					</div></a><?php
					}
					?>

				</div>	
	</div>	
</div>

	<?php include("includes/footer.html"); ?>
		
</div>
<div style=display:none;>
</body>
</html>