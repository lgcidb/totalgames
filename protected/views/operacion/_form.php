<?php
/* @var $this OperacionController */
/* @var $model Operacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaOperacion'); ?>
		<?php echo $form->textField($model,'fechaOperacion'); ?>
		<?php echo $form->error($model,'fechaOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'montoOperacion'); ?>
		<?php echo $form->textField($model,'montoOperacion'); ?>
		<?php echo $form->error($model,'montoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuario_emailUsuario'); ?>
		<?php echo $form->textField($model,'Usuario_emailUsuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'Usuario_emailUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Juego_idJuego'); ?>
		<?php echo $form->textField($model,'Juego_idJuego'); ?>
		<?php echo $form->error($model,'Juego_idJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoOperacion_idTipoOperacion'); ?>
		<?php echo $form->textField($model,'tipoOperacion_idTipoOperacion'); ?>
		<?php echo $form->error($model,'tipoOperacion_idTipoOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estadoOperacion_idEstadoOperacion'); ?>
		<?php echo $form->textField($model,'estadoOperacion_idEstadoOperacion'); ?>
		<?php echo $form->error($model,'estadoOperacion_idEstadoOperacion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar cambios' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->