<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HardStop - Registro de usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <LINK REL=StyleSheet HREF="css/registro.css">
    <style>
        .ocultar{
            display: none;
        }
    </style>
</head>
<body>
    <div class="caja">
        <a href="index.php"><img class="logo" src="img/xd.png"></a>
        <div id="caja2">
            <form action="#" method="post">
                <input type="mail" name="mail" class="form-css" placeholder="Usuario(EMAIL)" required>
                <div id="formulario1">
                    <input type="password" name="pw" class="form-css formulario1" placeholder="Contraseña" required>
                    <input type="password" name="vpw" class="form-css formulario1" placeholder="Reingrese su contraseña" required>
                </div>
                <div id="formulario1">
                    <input type="text" name="nombre" class="form-css formulario1" placeholder="Nombre" required>
                    <input type="text" name="apellido" class="form-css formulario1" placeholder="Apellido" required>
                </div>
                <input type="text" name="calle" class="form-css" placeholder="Calle y Nro" required>
                <div id="formulario1">
                    <select class="form-css formulario1" name="provincia" required>
                        <option value ="Capital Federal">Capital Federal</option>
                        <option value ="Buenos Aires">Buenos Aires</option>
                        <option value ="Catamarca">Catamarca</option>
                        <option value ="Chaco">Chaco</option>
                        <option value ="Chubut">Chubut</option>
                        <option value ="Córdoba">Córdoba</option>
                        <option value ="Corrientes">Corrientes</option>
                        <option value ="Entre Ríos">Entre Ríos</option>
                        <option value ="Formosa">Formosa</option>
                        <option value ="Jujuy">Jujuy</option>
                        <option value ="La Pampa">La Pampa</option>
                        <option value ="La Rioja">La Rioja</option>
                        <option value ="Mendoza">Mendoza</option>
                        <option value ="Misiones">Misiones</option>
                        <option value ="Neuquén">Neuquén</option>
                        <option value ="Río Negro">Río Negro</option>
                        <option value ="Salta">Salta</option>
                        <option value ="San Juan">San Juan</option>
                        <option value ="San Luis">San Luis</option>
                        <option value ="Santa Cruz">Santa Cruz</option>
                        <option value ="Santa Fe">Santa Fe</option>
                        <option value ="Santiago del Estero">Santiago del Estero</option>
                        <option value ="Tierra del Fuego">Tierra del Fuego</option>
                        <option value ="Tucumán">Tucumán</option>
                    </select>
                    <input type="text" name="partido" class="form-css formulario1" placeholder="Partido" required>    
                </div>
                <div id="formulario1">
                    <input type="text" name="localidad" class="form-css formulario1 box1" placeholder="Localidad" required>
                    <input type="number" name="cp" class="form-css formulario1 box1" placeholder="Codigo Postal" required>
                </div>
                <div id="formulario1">
                    <input type="number" name="tel" class="form-css formulario1 box1" placeholder="Teléfono" required>
                    <input type="number" name="dni" class="form-css formulario1 box1" placeholder="DNI" required>
                </div>
                <input type="submit" class="boton-enviar" name="enviar" value="CREAR CUENTA">
                 
            </form>
            
                <a href="index.php" class="boton-enviar boton-cancelar" name="cancelar">CANCELAR</a>
           
        </div>
	</div>
<?php
	include("sql/conexion.php");
	include("sql/select.php");
    if(isset($_REQUEST['enviar'])){
        $mail = $_REQUEST['mail'];
        $pw = $_REQUEST['pw'];
        $vpw = $_REQUEST['vpw'];
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $calle = $_REQUEST['calle'];
        $provincia = $_REQUEST['provincia'];
        $partido = $_REQUEST['partido'];
        $localidad = $_REQUEST['localidad'];
        $codigo_postal = $_REQUEST['cp'];
        $tel = $_REQUEST['tel'];
        $dni = $_REQUEST['dni'];
       	$id_r = "SELECT id_registro FROM registros WHERE mail='$mail'";
    	$consulta = $conexion->query($id_r);
    	if($consulta->num_rows>0){
    		while($registro = $consulta->fetch_assoc()){
    			echo '<script> alert("Error, el mail ya ha sido registrado anteriormente!")</script>';
    		}
    	}else{
    		if($pw === $vpw){
    		    if(strlen($codigo_postal)<5 && strlen($tel)>=8 && strlen($tel)<=12 && strlen($dni)>=7){
                    include("includes/mail.php");
                    $cod = substr(md5(uniqid()), 0, 10);
                    $pwe=md5($pw);

        			$xd="INSERT INTO registros (mail, password, nombre, apellido, calle, provincia, partido, localidad, cp, tel, dni, cod_ver) VALUES ('$mail', '$pwe', '$nombre', '$apellido', '$calle', '$provincia', '$partido', '$localidad', '$codigo_postal', '$tel', '$dni', '$cod')";
        			$insertar = $conexion->query($xd);
        			echo '<script type="text/javascript">
        			alert("Registro exitoso, sera redirigido despues de esto");
                    window.location="index.php";
                    </script>';
    		    }else{
    		    echo "<script> alert('Uno de los parametros ingresados es incorrecto, por favor, intentelo de nuevo')</script>";
    		    }    
            }else{
    		    echo "<script> alert('Las contraseñas no coinciden')</script>";      
    		}
    	}
    			
    }
    if(isset($_REQUEST['cancelar'])){
         header('Location: index.php');
    }
?>
<div style=display:none;>
</body>
</html>