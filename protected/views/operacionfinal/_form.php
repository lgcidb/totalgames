<?php
/* @var $this OperacionfinalController */
/* @var $model Operacionfinal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'operacionfinal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaOperacionFinal'); ?>
		<?php echo $form->textField($model,'fechaOperacionFinal'); ?>
		<?php echo $form->error($model,'fechaOperacionFinal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idOperacion'); ?>
		<?php echo $form->textField($model,'idOperacion'); ?>
		<?php echo $form->error($model,'idOperacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailUsuarioFinal'); ?>
		<?php echo $form->textField($model,'emailUsuarioFinal',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailUsuarioFinal'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->