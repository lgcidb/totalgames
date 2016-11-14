<?php
/* @var $this OperacionfinalController */
/* @var $model Operacionfinal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idOperacionFinal'); ?>
		<?php echo $form->textField($model,'idOperacionFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaOperacionFinal'); ?>
		<?php echo $form->textField($model,'fechaOperacionFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Operacion_idOperacion'); ?>
		<?php echo $form->textField($model,'Operacion_idOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Usuario_emailUsuarioFinal'); ?>
		<?php echo $form->textField($model,'Usuario_emailUsuarioFinal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->