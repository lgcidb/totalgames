<?php
/* @var $this JuegoController */
/* @var $model Juego */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'juego-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombreJuego'); ?>
		<?php echo $form->textField($model,'nombreJuego',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombreJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcionJuego'); ?>
		<?php echo $form->textField($model,'descripcionJuego',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descripcionJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'requisitosJuego'); ?>
		<?php echo $form->textField($model,'requisitosJuego',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'requisitosJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clasificacionContenido_idClasificacion'); ?>
		<?php echo $form->textField($model,'clasificacionContenido_idClasificacion'); ?>
		<?php echo $form->error($model,'clasificacionContenido_idClasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genero_idGenero'); ?>
		<?php echo $form->textField($model,'genero_idGenero'); ?>
		<?php echo $form->error($model,'genero_idGenero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idioma_idIdioma'); ?>
		<?php echo $form->textField($model,'idioma_idIdioma'); ?>
		<?php echo $form->error($model,'idioma_idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'plataforma_idPlataforma'); ?>
		<?php echo $form->textField($model,'plataforma_idPlataforma'); ?>
		<?php echo $form->error($model,'plataforma_idPlataforma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->