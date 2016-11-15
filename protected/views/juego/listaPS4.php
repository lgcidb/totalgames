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
			<td>
				<?php 
					$idClas = $item['clasificacionContenido_idClasificacion'];
					$clas = Clasificacioncontenido::model()->find("idClasificacion='$idClas'");
					$nombreClas = $clas['tipoClasificacion'];
					echo $nombreClas;
				?>
			</td>
			<td>
				<?php 
					$idGen = $item['genero_idGenero'];
					$gen = Genero::model()->find("idGenero='$idGen'");
					$nombreGen = $gen['nombreGenero'];
					echo $nombreGen; 
				?>
			</td>
			<td>
				<?php 
					$idIdio = $item['idioma_idIdioma'];
					$idio = Idioma::model()->find("idIdioma='$idIdio'");
					$nombreIdio = $idio['nombreIdioma'];
					echo $nombreIdio; 
				?>
			</td>
			<td>
				<?php 
					$idPla = $item['plataforma_idPlataforma'];
					$pla = Plataforma::model()->find("idPlataforma='$idPla'");
					$nombrePla = $pla['nombrePlataforma'];
					echo $nombrePla; 
				?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>