<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 	
   
<?php echo CHtml::endForm(); ?>

<div>
	<table>
		<tr>
			<th>Nombre Juego</th>
			<th>Descripción Juego</th>
			<th>Requisitos Juego</th>
			<th>Clasificación</th>
			<th>Género</th>
			<th>Idioma</th>
			<th>Plataforma</th>
		</tr>
		<?php foreach ($juegos as $item): ?>
		<tr>
			<td><?php echo $item['nombreJuego']; ?></td>
			<td><?php echo $item['descripcionJuego']; ?></td>
			<td><?php echo $item['requisitosJuego']; ?></td>
			<td><?php echo $item['clasificacionContenido_idClasificacion']; ?></td>
			<td><?php echo $item['genero_idGenero']; ?></td>
			<td><?php echo $item['idioma_idIdioma']; ?></td>
			<td><?php echo $item['plataforma_idPlataforma']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>