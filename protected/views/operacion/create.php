<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Operacion', 'url'=>array('index')),
	array('label'=>'Manage Operacion', 'url'=>array('admin')),
);
?>

<h1>Create Operacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>