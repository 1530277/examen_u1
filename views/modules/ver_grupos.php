<?php
	$grupos = main_controller::get_grupos();
?>

<table>
	<thead>
		<th>Nombre</th>
		<th>Cuatrimestre</th>
	</thead>
	<tbody>
		<?php
			foreach($grupos as $grupo){
		?>
			<td><?php echo $grupo['nombre']; ?></td>
			<td><?php echo $grupo['cuatrimestre']; ?></td>
		<?php }?>
	</tbody>
</table>