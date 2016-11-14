<?php
/* @var $this EstadooperacionController */
/* @var $data Estadooperacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstadoOperacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idEstadoOperacion), array('view', 'id'=>$data->idEstadoOperacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoEstado')); ?>:</b>
	<?php echo CHtml::encode($data->tipoEstado); ?>
	<br />


</div>