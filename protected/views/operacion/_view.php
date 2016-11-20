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

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->emailUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idJuego')); ?>:</b>
	<?php echo CHtml::encode($data->idJuego); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->idTipoOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstadoOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->idEstadoOperacion); ?>
	<br />


</div>