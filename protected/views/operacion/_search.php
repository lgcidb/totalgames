<?php
/* @var $this OperacionController */
/* @var $model Operacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idOperacion'); ?>
		<?php echo $form->textField($model,'idOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fechaOperacion'); ?>
		<?php echo $form->textField($model,'fechaOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'montoOperacion'); ?>
		<?php echo $form->textField($model,'montoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'emailUsuario'); ?>
		<?php echo $form->textField($model,'emailUsuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idJuego'); ?>
		<?php echo $form->textField($model,'idJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idTipoOperacion'); ?>
		<?php echo $form->textField($model,'idTipoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idEstadoOperacion'); ?>
		<?php echo $form->textField($model,'idEstadoOperacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->