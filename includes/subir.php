<form action="index.php" method="post" enctype="multipart/form-data">
<input type="file" name="imagen">
<input type="submit" name="enviar">
</form>

<?php
if(isset($_POST['enviar'])){
	if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
		 $directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes/';
		move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio.$_FILES['imagen']['name']);}
}
?>