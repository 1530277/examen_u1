<?php
	$res = main_controller::insert_grupo();
?>
<div class="container">
	<form method="post">
	<p>
		<label for="nombre">Nombre: </label>
		<input type="text" name="nombre" id="nombre">
	</p>	
	<p>
		<label for="cuatrimestre">Cuatrimestre: </label>
		<input type="text" id="cuatrimestre" name="cuatrimestre">
	</p>
	<p>
		<input type="submit" value="Guardar" name="guardar">
	</p>
	</form>
</div>