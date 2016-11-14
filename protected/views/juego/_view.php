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

	<b><?php echo CHtml::encode($data->getAttributeLabel('clasificacionContenido_idClasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->clasificacionContenido_idClasificacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero_idGenero')); ?>:</b>
	<?php echo CHtml::encode($data->genero_idGenero); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idioma_idIdioma')); ?>:</b>
	<?php echo CHtml::encode($data->idioma_idIdioma); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('plataforma_idPlataforma')); ?>:</b>
	<?php echo CHtml::encode($data->plataforma_idPlataforma); ?>
	<br />

	*/ ?>

</div>