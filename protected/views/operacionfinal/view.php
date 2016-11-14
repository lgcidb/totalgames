<?php
/* @var $this OperacionfinalController */
/* @var $model Operacionfinal */

$this->breadcrumbs=array(
	'Operacionfinals'=>array('index'),
	$model->idOperacionFinal,
);

$this->menu=array(
	array('label'=>'List Operacionfinal', 'url'=>array('index')),
	array('label'=>'Create Operacionfinal', 'url'=>array('create')),
	array('label'=>'Update Operacionfinal', 'url'=>array('update', 'id'=>$model->idOperacionFinal)),
	array('label'=>'Delete Operacionfinal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOperacionFinal),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operacionfinal', 'url'=>array('admin')),
);
?>

<h1>View Operacionfinal #<?php echo $model->idOperacionFinal; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOperacionFinal',
		'fechaOperacionFinal',
		'Operacion_idOperacion',
		'Usuario_emailUsuarioFinal',
	),
)); ?>
