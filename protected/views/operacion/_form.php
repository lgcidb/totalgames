<?php
/* @var $this OperacionController */
/* @var $model Operacion */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'operacion-form',
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
        <?php echo $form->labelEx($model, 'fechaOperacion'); ?>
        <?php
        if ($model->fechaOperacion != '') {
            $model->fechaOperacion = date('Y-m-d', strtotime($model->fechaOperacion));
        }
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'fechaOperacion',
            'value' => $model->fechaOperacion,
            'language' => 'es',
            'htmlOptions' => array('readonly' => "readonly"),
            'options' => array(
                'autoSize' => true,
                'defaultDate' => $model->fechaOperacion,
                'dateFormat' => 'yy-mm-dd',
                'buttonImage' => Yii::app()->baseUrl . '/images/calendar.png',
                'buttonImageOnly' => true,
                'selectOtherMonths' => true,
                'showAnim' => 'slide',
                'showButtonPanel' => true,
                'showOn' => 'button',
                'showOtherMonths' => true,
                'changeMonth' => 'true',
                'changeYear' => 'true',
                'minDate' => "1d",
                'maxDate' => "1d",
            ),
        ));
        ?>
        <?php echo $form->error($model, 'fechaOperacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'montoOperacion'); ?>
        <?php echo $form->textField($model, 'montoOperacion'); ?>
        <?php echo $form->error($model, 'montoOperacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'emailUsuario'); ?>
        <?php echo $form->textField($model, 'emailUsuario', array('size' => 45, 'maxlength' => 45)); ?>
        <?php echo $form->error($model, 'emailUsuario'); ?>
    </div>

    
    <div class="row">
        <?php echo $form->labelEx($model, 'idJuego'); ?>
        <?php echo $form->dropDownList($model, 'idJuego', CHtml::listData(Juego::model()->findAll(), 'idJuego', 'nombreJuego')); ?>
        <?php echo $form->error($model, 'idJuego'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idTipoOperacion'); ?>
        <?php echo $form->dropDownList($model, 'idTipoOperacion', CHtml::listData(Tipooperacion::model()->findAll(), 'idTipoOperacion', 'nombreOperacion')); ?>
        <?php echo $form->error($model, 'idTipoOperacion'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'idEstadoOperacion'); ?>
        <?php echo $form->dropDownList($model, 'idEstadoOperacion', CHtml::listData(Estadooperacion::model()->findAll(), 'idEstadoOperacion', 'tipoEstado')); ?>
        <?php echo $form->error($model, 'idEstadoOperacion'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Guardar cambios'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->