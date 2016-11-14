<?php
/* @var $this TipooperacionController */
/* @var $model Tipooperacion */

$this->breadcrumbs=array(
	'Tipooperacions'=>array('index'),
	$model->idTipoOperacion,
);

$this->menu=array(
	array('label'=>'List Tipooperacion', 'url'=>array('index')),
	array('label'=>'Create Tipooperacion', 'url'=>array('create')),
	array('label'=>'Update Tipooperacion', 'url'=>array('update', 'id'=>$model->idTipoOperacion)),
	array('label'=>'Delete Tipooperacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTipoOperacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tipooperacion', 'url'=>array('admin')),
);
?>

<h1>View Tipooperacion #<?php echo $model->idTipoOperacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idTipoOperacion',
		'nombreOperacion',
	),
)); ?>
