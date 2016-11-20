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
		<?php echo $form->label($model,'idOperacion'); ?>
		<?php echo $form->textField($model,'idOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailUsuarioFinal'); ?>
		<?php echo $form->textField($model,'emailUsuarioFinal',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->