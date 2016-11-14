<?php
/* @var $this TipooperacionController */
/* @var $data Tipooperacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTipoOperacion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTipoOperacion), array('view', 'id'=>$data->idTipoOperacion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->nombreOperacion); ?>
	<br />


</div>