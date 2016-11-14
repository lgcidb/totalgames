<?php
/* @var $this IdiomaController */
/* @var $data Idioma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idIdioma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idIdioma), array('view', 'id'=>$data->idIdioma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombreIdioma')); ?>:</b>
	<?php echo CHtml::encode($data->nombreIdioma); ?>
	<br />


</div>