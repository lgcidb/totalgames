<?php
/* @var $this OperacionController */
/* @var $data Operacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOperacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idOperacion), array('view', 'id'=>$data->idOperacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->fechaOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('montoOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->montoOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_emailUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_emailUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Juego_idJuego')); ?>:</b>
	<?php echo CHtml::encode($data->Juego_idJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoOperacion_idTipoOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoOperacion_idTipoOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoOperacion_idEstadoOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->estadoOperacion_idEstadoOperacion); ?>
	<br />


</div>