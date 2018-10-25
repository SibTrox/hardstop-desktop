<form action="abm.php" method="get" class="formfiltro">	
	<select name="tipo" class="selectfiltro">
		<option value="0">Todos</option>
		<option value="2">CPU</option>
		<option value="3">Coolers</option>
		<option value="4">Mothers y combos</option>
		<option value="5">RAM</option>
		<option value="6">GPU</option>
		<option value="7">Fuente</option>
		<option value="8">Almacenamiento</option>
		<option value="9">Monitores</option>
		<option value="10">Perifericos</option>
		<option value="11">Gabinete</option>		
</select>	
<input type="submit" name="mostrar" value="Mostrar">
</form>
<form action="abm.php" method="get" class="formfiltro">
<?php
if (isset($_GET['grupo'])) {
	echo '<input type="hidden" name="grupo" value="'.$_GET['grupo'].'">';
}
?>
<input type="hidden" name="grupo" value="">
<input type="text" name="p_buscar" placeholder="Palabra a buscar" >
<input type="submit" name="buscar" value="buscar" class="buscar.abm">
</form>
<table border="2">
<?php
if(isset($_GET['grupo'])){
?>
<tr class="trmain">
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=id_producto">ID</a></th>
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=nombre">Nombre</a></th>
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=descripcion">Descripcion</a></th>
		<th>Imagen</th>
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=precio">Precio</a></th>
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=stock">Stock</a></th>
		<th><a href="abm.php?tipo=<?php echo $_GET['tipo']?>&&c=tipo">Tipo</a></th>
		<th>EDITAR</th>
		<th>BORRAR</th>
</tr>

<?php		
}else{

?>
	<tr class="trmain">
		<th><a href="abm.php?c=id_producto">ID</a></th>
		<th><a href="abm.php?c=nombre">Nombre</a></th>
		<th><a href="abm.php?c=descripcion">Descripcion</a></th>
		<th>Imagen</th>
		<th><a href="abm.php?c=precio">Precio</a></th>
		<th><a href="abm.php?c=stock">Stock</a></th>
		<th><a href="abm.php?c=tipo">Tipo</a></th>
		<th>EDITAR</th>
		<th>BORRAR</th>
	</tr>

<?php
}


include("filtros.php");



if($consulta->num_rows>0){
	while($registro = $consulta->fetch_assoc()){
		if(isset($_GET['id_edit']) && $registro['id_producto']==$_GET['id_edit']){
?>
<tr><form action="abm.php" method="post" enctype="multipart/form-data">
	<td><input type="hidden" name="id_editar" value="<?php echo $registro['id_producto']; ?>"><?php echo $registro['id_producto']; ?></td>
	<td><input class="inputedit" type="text" name="nombre" value="<?php echo $registro['nombre']; ?>"></td>
	<td><textarea class="inputedit"  name="desc"><?php echo $registro['descripcion']; ?></textarea></td>
	<td><input type="file" name="imagen"></td>
	<td><input class="inputedit" type="text" name="precio" value="<?php echo $registro['precio']; ?>"></td>
	<td><input class="inputedit" type="number" name="stock" value="<?php echo $registro['stock']; ?>"></td>
	<td><select name="tipo" class="selectedit">
		
		<option value="2">CPU</option>
		<option value="3">Coolers</option>
		<option value="4">Mothers y combos</option>
		<option value="5">RAM</option>
		<option value="6">GPU</option>
		<option value="7">Fuente</option>
		<option value="8">Almacenamiento</option>
		<option value="9">Monitores</option>
		<option value="10">Perifericos</option>
		<option value="11">Gabinete</option>
	</select></td>
	
	<td><input type="submit" class="input-modificar-boton" name="modificar" value="Modificar"></td>
	<td><a href="abm.php?id=<?php echo $registro['id_producto']; ?>" name="borrar" value="borrar">Borrar</a></td>
	
	</form>
</tr>
<?php
		}else{
?>
<tr>
		 <td class="editarborrar"><?php echo $registro['id_producto']; ?> </td>
		 <td><?php echo $registro['nombre']; ?> </td>
		 <td><?php echo $registro['descripcion']; ?> </td>
		 <td class=""><img class="imgabm" src="img/prod/<?php echo $registro['imagen']; ?>"></td>
		 <td class="editarborrar"><?php echo $registro['precio']; ?> </td>
		 <td class="editarborrar"><?php echo $registro['stock']; ?> </td>
		 <td class="editarborrar"><?php echo $registro['tipo']; ?> </td>
		 <td class="editarborrar"><a href="abm.php?id_edit=<?php echo $registro['id_producto']; ?>"> Editar </a></td>
		 <td class="editarborrar"><a href="abm.php?id=<?php echo $registro['id_producto']; ?>"> Borrar </a></td>

</tr>	
<?php
}}
}else{
	echo "tabla vacia";
}

?>

</table>