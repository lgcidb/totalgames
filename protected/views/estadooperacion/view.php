<?php
/* @var $this EstadooperacionController */
/* @var $model Estadooperacion */

$this->breadcrumbs=array(
	'Estadooperacions'=>array('index'),
	$model->idEstadoOperacion,
);

$this->menu=array(
	array('label'=>'List Estadooperacion', 'url'=>array('index')),
	array('label'=>'Create Estadooperacion', 'url'=>array('create')),
	array('label'=>'Update Estadooperacion', 'url'=>array('update', 'id'=>$model->idEstadoOperacion)),
	array('label'=>'Delete Estadooperacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idEstadoOperacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Estadooperacion', 'url'=>array('admin')),
);
?>

<h1>View Estadooperacion #<?php echo $model->idEstadoOperacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idEstadoOperacion',
		'tipoEstado',
	),
)); ?>
