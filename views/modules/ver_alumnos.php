<?php
	$alumnos = main_controller::get_alumnos();
?>

<table>
	<thead>
		<th>Matricula</th>
		<th>Nombre</th>
		<th>Carrera</th>
		<th>Ingreso</th>
		<th>Grupo</th>
	</thead>
	<tbody>
		<?php
			foreach($alumnos as $alumno){
		?>
			<td><?php echo $alumno['matricula']; ?></td>
			<td><?php echo $alumno['nombres']." ".$alumno['apellidos']; ?></td>
			<td><?php echo $alumno['carrera']; ?></td>
			<td><?php echo $alumno['clave']; ?></td>
			<td><?php echo $alumno['grupo']; ?></td>
		<?php }?>
	</tbody>
</table>