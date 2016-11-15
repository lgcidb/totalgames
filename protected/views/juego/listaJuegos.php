<div class="form">
<?php echo CHtml::beginForm(); ?>
 
    <?php echo CHtml::errorSummary($model); ?>
 
    <div class="row">
		<?php echo CHtml::activeLabel($model,'plataforma_idPlataforma'); ?>
        <?php echo CHtml::dropDownList($model,'plataforma_idPlataforma',
        	CHtml::listData(Plataforma::model()->findAll(),
        		'plataforma_idPlataforma', 'nombrePlataforma'
        	)); ?>
	</div>
 
   
    <div class="row submit">
        <?php echo CHtml::submitButton('Login'); ?>
    </div>
 
<?php echo CHtml::endForm(); ?>