<?php
/* @var $this EstadooperacionController */
/* @var $model Estadooperacion */

$this->breadcrumbs=array(
	'Estadooperacions'=>array('index'),
	$model->idEstadoOperacion=>array('view','id'=>$model->idEstadoOperacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Estadooperacion', 'url'=>array('index')),
	array('label'=>'Create Estadooperacion', 'url'=>array('create')),
	array('label'=>'View Estadooperacion', 'url'=>array('view', 'id'=>$model->idEstadoOperacion)),
	array('label'=>'Manage Estadooperacion', 'url'=>array('admin')),
);
?>

<h1>Update Estadooperacion <?php echo $model->idEstadoOperacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>