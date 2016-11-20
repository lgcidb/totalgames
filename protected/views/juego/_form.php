<?php
/* @var $this JuegoController */
/* @var $model Juego */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'juego-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="note">Los campos <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'nombreJuego'); ?>
        <?php echo $form->textField($model, 'nombreJuego', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'nombreJuego'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'descripcionJuego'); ?>
        <?php echo $form->textField($model, 'descripcionJuego', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'descripcionJuego'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'requisitosJuego'); ?>
        <?php echo $form->textField($model, 'requisitosJuego', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'requisitosJuego'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Clasificacion'); ?>
        <?php echo $form->dropDownList($model, 'idClasificacion', CHtml::listData(Clasificacioncontenido::model()->findAll(), 'idClasificacion', 'tipoClasificacion')); ?>
        <?php echo $form->error($model, 'idClasificacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Genero'); ?>
        <?php echo $form->dropDownList($model, 'idGenero', CHtml::listData(Genero::model()->findAll(), 'idGenero', 'nombreGenero')); ?>
        <?php echo $form->error($model, 'idGenero'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'Idioma'); ?>
        <?php echo $form->dropDownList($model, 'idIdioma', CHtml::listData(Idioma::model()->findAll(), 'idIdioma', 'nombreIdioma')); ?>
        <?php echo $form->error($model, 'idIdioma'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model, 'Plataforma'); ?>
        <?php echo $form->dropDownList($model, 'idPlataforma', CHtml::listData(Plataforma::model()->findAll(), 'idPlataforma', 'nombrePlataforma')); ?>
        <?php echo $form->error($model, 'idPlataforma'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->