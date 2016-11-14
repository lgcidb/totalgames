<?php
/* @var $this GeneroController */
/* @var $model Genero */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idGenero'); ?>
		<?php echo $form->textField($model,'idGenero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreGenero'); ?>
		<?php echo $form->textField($model,'nombreGenero',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->