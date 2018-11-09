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
    <h2 class="stockprod">CARRITO </h2>
    <hr  noshade="noshade" size="1" color="black" class="linea3" />
    <?php
        if(!isset($_SESSION['usuario'])){
            
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
?>
<?php include("includes/footer.html"); ?>
</div>
        <script src="js/login.js"></script>
        <script src="js/main.js"></script>
        <div style=display:none;>
        </body>
        </html>