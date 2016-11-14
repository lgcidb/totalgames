<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idPlataforma'); ?>
		<?php echo $form->textField($model,'idPlataforma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombrePlataforma'); ?>
		<?php echo $form->textField($model,'nombrePlataforma',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->