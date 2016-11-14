<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emailUsuario'); ?>
		<?php echo $form->textField($model,'emailUsuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'emailUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreUsuario'); ?>
		<?php echo $form->textField($model,'nombreUsuario',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'claveUsuario'); ?>
		<?php echo $form->textField($model,'claveUsuario'); ?>
		<?php echo $form->error($model,'claveUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valoracionUsuario'); ?>
		<?php echo $form->textField($model,'valoracionUsuario'); ?>
		<?php echo $form->error($model,'valoracionUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->