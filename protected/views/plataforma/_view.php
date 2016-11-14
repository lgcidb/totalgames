<?php
/* @var $this PlataformaController */
/* @var $data Plataforma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPlataforma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPlataforma), array('view', 'id'=>$data->idPlataforma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombrePlataforma')); ?>:</b>
	<?php echo CHtml::encode($data->nombrePlataforma); ?>
	<br />


</div>