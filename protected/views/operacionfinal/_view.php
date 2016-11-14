<?php
/* @var $this OperacionfinalController */
/* @var $data Operacionfinal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOperacionFinal')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idOperacionFinal), array('view', 'id'=>$data->idOperacionFinal)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaOperacionFinal')); ?>:</b>
	<?php echo CHtml::encode($data->fechaOperacionFinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Operacion_idOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->Operacion_idOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Usuario_emailUsuarioFinal')); ?>:</b>
	<?php echo CHtml::encode($data->Usuario_emailUsuarioFinal); ?>
	<br />


</div>