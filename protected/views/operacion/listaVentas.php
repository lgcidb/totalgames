<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 	
   
<?php echo CHtml::endForm(); ?>

<div>
	<table>
		<tr>
			<th>Fecha Venta</th>
			<th>Monto de la Venta </th>
			<th>Email del Usuario</th>
			<th>Juego</th>
			<th>Estado de la Operación</th>
		</tr>
		<?php foreach ($operaciones as $item): ?>
		<tr>
			<td><?php echo $item['fechaOperacion']; ?></td>
			<td><?php echo $item['montoOperacion']; ?></td>
			<td><?php echo $item['Usuario_emailUsuario']; ?></td>
			<td>
				<?php 
					$idJue = $item['Juego_idJuego'];
					$jue = Juego::model()->find("idJuego='$idJue'");
					$nombreJue = $jue['nombreJuego'];
					echo $nombreJue; 
				?>
			</td>
			<td>
				<?php 
					$idOp = $item['estadoOperacion_idEstadoOperacion'];
					$op = Estadooperacion::model()->find("idEstadoOperacion='$idOp'");
					$nombreOp = $op['tipoEstado'];
					echo $nombreOp; 
				?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>