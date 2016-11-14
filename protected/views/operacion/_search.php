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
		<?php echo $form->label($model,'Usuario_emailUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_emailUsuario',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Juego_idJuego'); ?>
		<?php echo $form->textField($model,'Juego_idJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipoOperacion_idTipoOperacion'); ?>
		<?php echo $form->textField($model,'tipoOperacion_idTipoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estadoOperacion_idEstadoOperacion'); ?>
		<?php echo $form->textField($model,'estadoOperacion_idEstadoOperacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->