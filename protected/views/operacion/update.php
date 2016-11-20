<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	$model->idOperacion=>array('view','id'=>$model->idOperacion),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Operaciones', 'url'=>array('index')),
	array('label'=>'Agregar Operacion', 'url'=>array('create')),
	array('label'=>'Ver Operacion', 'url'=>array('view', 'id'=>$model->idOperacion)),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>Actualizar Operacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>