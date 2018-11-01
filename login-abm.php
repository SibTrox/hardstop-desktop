<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<script src="js/fontawesome-all.js"></script>
<link rel="stylesheet" type="text/css" href="css/fonts.css">
<link rel="stylesheet" href="css/formulario-login-abm.css">
<title>Login</title>
</head>
<body>
	<div class="contenedor">
        <img src="img/logoHD.png" class="img">
	   	<div id="login">
	   		<form action="#" method="post">
	   			<label>Usuario :</label><input type="nombre" id="usuario" name="user">
	   			<label>Contraseña :</label><input type="password" id="pw" name="pw">
	   			<input type="submit" id="submit" name="submit">
	   		</form>
        </div>
    </div>
<?php
    session_start();
    if(isset($_SESSION['admin'])){
        session_destroy();
    }
	if (isset($_REQUEST['submit'])) {
		if($_REQUEST['user'] === 'administrador' && $_REQUEST['pw'] === 'h4rdst0p'){
            $_SESSION['admin'] = $_REQUEST['user'];
            header('Location: abm.php');
        }else{
            echo "<script> alert('Su usuario y/o contraseña es incorrecta') </script>";
        }
	} 
?>
</div>
</html>