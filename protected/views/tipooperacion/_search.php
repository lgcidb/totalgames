<?php
/* @var $this TipooperacionController */
/* @var $model Tipooperacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idTipoOperacion'); ?>
		<?php echo $form->textField($model,'idTipoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreOperacion'); ?>
		<?php echo $form->textField($model,'nombreOperacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->