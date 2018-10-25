<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HardStop - Venta de Hardware al mejor precio</title>
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<link rel="stylesheet" type="text/css" href="icon/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon3/style.css">
	<link rel="stylesheet" type="text/css" href="icon/icon4/style.css">
	<script type="text/javascript" src="engine1/jquery.js"></script>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<LINK REL=StyleSheet HREF="css/stylexd.css">
	<LINK REL=StyleSheet HREF="css/footer.css">
	<LINK REL=StyleSheet HREF="css/nav.css">
	<LINK REL=StyleSheet HREF="css/header.css">
	<LINK REL=StyleSheet HREF="css/contacto.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" href="img/favicon.ico" />
	<LINK REL=StyleSheet HREF="css/login.css"> 
	
</head>
<body>
<div id="container">
	<?php include("includes/header.html"); ?>
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

	
	<div class="cont">
		

	

		
		<div class="form">
			<h2>FORMULARIO DE CONTACTO</h2>
			<form action="#" method="post">
		    <div class="div-flex">
    			<input type="text" name="nombre" placeholder="Nombre" required="required"  class="input-espacio">     
    		    <input type="email" name="email" placeholder="Email" required="required" class="texto1">
    	    </div>
		    <div class="div-flex">
    		    <input type="text" name="telefono" placeholder="Teléfono" required="required"  class="input-espacio">
    		    <input type="text" name="asunto" placeholder="Asunto" required="required" class="texto1">
		    </div>
		    <textarea class="form-textarea" placeholder="Ingrese su mensaje aqui" name="text" ></textarea>
		    <br>
		    <input type="submit" name="Enviar" class="footer-enviar2" value="Enviar"> 
			</form>
			<?php if (isset($_REQUEST['Enviar'])) {
				$nombre= $_REQUEST['nombre'];
				$email= $_REQUEST['email'];
				$telefono= $_REQUEST['telefono'];
				$asunto= $_REQUEST['asunto'];
				$mensaje=$_REQUEST['text'];
				include("includes/mail2.php"); } ?>
	    </div>
	    
	    <div class="infoo">
	    	<h2 class="titulo2">INFORMACIÓN</h2>
	    	<div class="infoo1">
				<p>HARDSTOP</p>
				<p class="p1">Marca registrada</p>
			</div>
			<div class="infoo1">
				<ul class="lista5"><li type="none">PUNTO</li><li type="none">PRINCIPAL</li><li type="none">DE ENTREGA</li></ul> 
				<ul class="lista1"><li type="none"><a class="link-contacto" href="https://www.google.com/maps/dir//-34.5850208,-58.4650832/@-34.585021,-58.465083,16z?hl=es-ES">Estomba 645 (Ver mapa)</li><li type="none">Ciudad Autónoma de Buenos Aires</li><li type="none">Código Postal:C1427BWR</li></ul></a>
			</div>  
			<div class="infoo1"> 	
				<ul class="lista6"><li type="none">SOPORTE</li><li type="none">TELEFÓNICO</li></ul>
				<ul class="lista2"><li type="none">0810-220-2780 líneas rotativas</li><li type="none">(011-5263-7390)</li></ul>
			</div> 
			<div class="infoo1">   
				<p>EMAIL</p>
				<p class="p2">info@hardstop.com</p>
			</div>
			<div class="infoo1">
				<ul class="lista7"><li type="none">HORARIOS DE</li><li type="none">ATENCIÓN</li></ul>
				<ul class="lista3"><li type="none">Lunes a Viernes de 10 a 19hs</li><li type="none">Sábados de 10 a 17hs</li></ul>
			</div>
			<div class="infoo1">
				<ul class="lista8"><li type="none">DISEÑO</li><li type="none">WEB</li></ul>
				<ul class="lista4"><li type="none">Realizado por:Correa Enzo, <li type="none"> Paramio Marcelo y
				Lopez Leonardo</li></ul>
			</div>
	</div>


	
	</div>
	<?php include("includes/footer.html"); ?>
		
	</div>
<script src="js/login.js"></script>
<script src="js/main.js"></script>
<div style=display:none;>
</body>

</html>