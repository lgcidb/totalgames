<?php
/* @var $this JuegoController */
/* @var $data Juego */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJuego')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idJuego), array('view', 'id'=>$data->idJuego)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreJuego')); ?>:</b>
	<?php echo CHtml::encode($data->nombreJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcionJuego')); ?>:</b>
	<?php echo CHtml::encode($data->descripcionJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('requisitosJuego')); ?>:</b>
	<?php echo CHtml::encode($data->requisitosJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Clasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->idClasificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Genero')); ?>:</b>
	<?php echo CHtml::encode($data->idGenero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Idioma')); ?>:</b>
	<?php echo CHtml::encode($data->idIdioma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Plataforma')); ?>:</b>
	<?php echo CHtml::encode($data->idPlataforma); ?>
	<br />

</div>