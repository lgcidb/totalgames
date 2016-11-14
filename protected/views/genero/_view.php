<?php
/* @var $this GeneroController */
/* @var $data Genero */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idGenero')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idGenero), array('view', 'id'=>$data->idGenero)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreGenero')); ?>:</b>
	<?php echo CHtml::encode($data->nombreGenero); ?>
	<br />


</div>