<?php
/* @var $this EstadooperacionController */
/* @var $model Estadooperacion */

$this->breadcrumbs=array(
	'Estadooperacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Estadooperacion', 'url'=>array('index')),
	array('label'=>'Manage Estadooperacion', 'url'=>array('admin')),
);
?>

<h1>Create Estadooperacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>