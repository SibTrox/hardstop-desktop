		<header>
		<div class="flexlogin">
	       	<div id="header" class="cajaheader">
	       		<img src="img/logoHD.png" class="img1">
	       		<form class="header-form" action="productos.php" method="GET">
	       			<div class="div-header">
						<input type="hidden" name="grupo" value="">
	       				<input type="text" name="p_buscar" placeholder="Buscar productos" class="header-text">
	       				<button type="submit" name="buscar" class="header-button" value="buscar"><span class="icon-search"></span></button>
	       			</div>
	       		</form>
				<div class="botones-header">
					<a href="carrito.php"><img src="img/carrito.png" class="img3"></a>
					<input type="checkbox" name="activar3" id="activar3">
					<?php
					session_start();
						if(isset($_SESSION['usuario'])){
							echo "<script> preguntarPorUsuarioLoggeado() </script>";
							?>
							<a href="#"><img  id="usuario-oculto" src="img/user.png" class="img4" for="activar3"></a>
							<a href="#"><img  id="usuario" src="img/user-logged.png" class="img4" for="activar3"></a>
							<?php
							require_once('includes/funciones.php');
						}else{
							?>
							<a href="#"><img  id="usuario" src="img/user.png" class="img4" for="activar3"></a>
							<a href="#"><img  id="usuario-oculto" src="img/user-logged.png" class="img4" for="activar3"></a>
							<?php
						}
					?>
					
				</div>
			</div>
			
		</div>	
		<div id="login"  class="arrow_box" style="display: none;">	
						<?php
						if($_SESSION['usuario']){
							?>
							<div id="bienvenida" class="form-login">
								<h1 style="color: white;"> Bienvenido</h1>
								<h1 style="color: white; margin-bottom: 15%;"> a Hardstop</h1>
								<h2 style="color: white;"> <?php echo $_SESSION['usuario'] ?> </h2>
								<form action="#" method="get" class="login-links">
									<input type="submit" name="mi-cuenta" class="botones-loggeado" value="Mi cuenta">
									<input type="submit" name="cerrar-sesion" class="botones-loggeado" value="Cerrar sesion">
								</form>
							</div>
							<?php
						}else{
							?>
							<form id="formulario-inicio" action="#" class="form-login" method="post">
								<?php 
									if (isset($_COOKIE['user3'])) {
										echo '<input type="email" name="mail" class="form-css" placeholder="E-mail" value="'.$_COOKIE['user3'].'">';			
									}
									else{?>
										<input type="email" name="mail" class="form-css" placeholder="E-mail" required="required">
									<?php }
								 ?>
							
							<input type="password" name="pw" class="form-css" placeholder="Contraseña" required="required">
							<!--<input type="checkbox" name="recorda">-->
							
							<div class="toggler">
  								<input id="toggler-1" name="recorda" type="checkbox"/>
  								<label for="toggler-1">
    							<svg class="toggler-on" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 130.2 130.2">
      							<polyline class="path check" points="100.2,40.2 51.5,88.8 29.8,67.5 "></polyline>
   								 </svg>
    							<svg class="toggler-off" version="1.1" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 130.2 130.2">
    							<line class="path line" x1="34.4" y1="34.4" x2="95.8" y2="95.8"></line>
     								<line class="path line" x1="95.8" y1="34.4" x2="34.4" y2="95.8"></line>
    								</svg>
									</label>
									<p style="color: white;">Recordame</p>  
								
							</div>
							<input type="submit" name="enviar" class="login-enviar" value="Iniciar sesion">
						</form>
						<div id="opciones" class="login-links">	
							<a href="registro.php" class="opciones">Registrarse</a>
							<a href="" class="opciones">Olvide la contraseña</a>
						</div>
						<?php
						}
						?>
					</div>		
		</header>
	<?php
		if(isset($_REQUEST['enviar'])){
	

		
					
			
			$pw=$_REQUEST['pw'];
			$pwe=md5($pw);
			require_once("sql/conexion.php");
			$sql = "SELECT * FROM registros WHERE password = '".$pwe."' AND mail = '".$_REQUEST['mail']."'";
			$consulta = $conexion->query($sql);
			if($consulta->num_rows>0){
				echo "<script> window.sessionStorage.setItem('user', 'logged') </script>";
				echo "<script> usuarioLoggeado() </script>";
				session_start();
				$_SESSION['usuario'] = $_REQUEST['mail'];
				if (isset($_REQUEST['recorda'])) {
					setcookie("user3", $_SESSION['usuario'],time()+3600,"/");
					header('Location: index.php');
				}else{			
					header('Location: index.php');
				}
			}else{
				echo "<script> usuarioErroneo() </script>";
			}
		}
		if(isset($_REQUEST['cerrar-sesion'])){
			echo "<script> cerrarSesion() </script>";
			session_destroy();
			header('Location: index.php');
		}
		
		
	?>