<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailUsuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emailUsuario), array('view', 'id'=>$data->emailUsuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->nombreUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('claveUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->claveUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valoracionUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->valoracionUsuario); ?>
	<br />


</div>