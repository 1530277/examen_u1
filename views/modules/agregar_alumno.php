<?php
	$cuatri_ingreso = main_controller::get_cuatri_ingreso();
	$grupos = main_controller::get_grupos();
	$res = main_controller::insert_alumno();
?>
<div class="container">
	<form method="post">
	<p>
		<label for="matricula">Matricula: </label>
		<input type="text" name="matricula" id="matricula">
	</p>	
	<p>
		<label for="nombres">Nombres: </label>
		<input type="text" id="nombres" name="nombres">
	</p>
	<p>
		<label for="apellidos">Apellidos: </label>
		<input type="text" id="apellidos" name="apellidos">
	</p>
	<p>
		<label for="carrera">Carrera: </label>
		<input type="text" id="carrera" name="carrera">
	</p>
	<p>
		<label for="id_ingreso">Cuatrimestre de ingreso: </label>
		<select name="id_ingreso" id="id_ingreso">
			<?php
				foreach ($cuatri_ingreso as $ingreso) {
					echo "<option value='$ingreso[id]' > $ingreso[clave] </option>";
				}
			?>
		</select>
	</p>
	<p>
		<label for="id_grupo">Grupo: </label>
		<select name="id_grupo" id="id_grupo">
			<?php
				foreach ($grupos as $grupo) {
					echo "<option value=$grupo[id]> $grupo[nombre] </option>";
				}
			?>
		</select>
	</p>
	<p>
		<input type="submit" value="Guardar" name="guardar">
	</p>
	</form>
</div>