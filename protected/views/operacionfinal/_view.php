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

	<b><?php echo CHtml::encode($data->getAttributeLabel('idOperacion')); ?>:</b>
	<?php echo CHtml::encode($data->idOperacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailUsuarioFinal')); ?>:</b>
	<?php echo CHtml::encode($data->emailUsuarioFinal); ?>
	<br />


</div>