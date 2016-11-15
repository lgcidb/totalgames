<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Operaciones', 'url'=>array('index')),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>Agregar Operacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>