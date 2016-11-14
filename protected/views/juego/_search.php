<?php
/* @var $this JuegoController */
/* @var $model Juego */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idJuego'); ?>
		<?php echo $form->textField($model,'idJuego'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombreJuego'); ?>
		<?php echo $form->textField($model,'nombreJuego',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descripcionJuego'); ?>
		<?php echo $form->textField($model,'descripcionJuego',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'requisitosJuego'); ?>
		<?php echo $form->textField($model,'requisitosJuego',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clasificacionContenido_idClasificacion'); ?>
		<?php echo $form->textField($model,'clasificacionContenido_idClasificacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero_idGenero'); ?>
		<?php echo $form->textField($model,'genero_idGenero'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idioma_idIdioma'); ?>
		<?php echo $form->textField($model,'idioma_idIdioma'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'plataforma_idPlataforma'); ?>
		<?php echo $form->textField($model,'plataforma_idPlataforma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->