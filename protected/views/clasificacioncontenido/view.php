<?php
/* @var $this ClasificacioncontenidoController */
/* @var $model Clasificacioncontenido */

$this->breadcrumbs=array(
	'Clasificacioncontenidos'=>array('index'),
	$model->idClasificacion,
);

$this->menu=array(
	array('label'=>'List Clasificacioncontenido', 'url'=>array('index')),
	array('label'=>'Create Clasificacioncontenido', 'url'=>array('create')),
	array('label'=>'Update Clasificacioncontenido', 'url'=>array('update', 'id'=>$model->idClasificacion)),
	array('label'=>'Delete Clasificacioncontenido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idClasificacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Clasificacioncontenido', 'url'=>array('admin')),
);
?>

<h1>View Clasificacioncontenido #<?php echo $model->idClasificacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idClasificacion',
		'tipoClasificacion',
	),
)); ?>
