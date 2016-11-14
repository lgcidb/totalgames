<?php
/* @var $this ClasificacioncontenidoController */
/* @var $data Clasificacioncontenido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idClasificacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idClasificacion), array('view', 'id'=>$data->idClasificacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoClasificacion')); ?>:</b>
	<?php echo CHtml::encode($data->tipoClasificacion); ?>
	<br />


</div>