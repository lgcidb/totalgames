<?php
/* @var $this ClasificacioncontenidoController */
/* @var $model Clasificacioncontenido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idClasificacion'); ?>
		<?php echo $form->textField($model,'idClasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoClasificacion'); ?>
		<?php echo $form->textField($model,'tipoClasificacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->