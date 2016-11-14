<?php
/* @var $this EstadooperacionController */
/* @var $model Estadooperacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idEstadoOperacion'); ?>
		<?php echo $form->textField($model,'idEstadoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoEstado'); ?>
		<?php echo $form->textField($model,'tipoEstado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->