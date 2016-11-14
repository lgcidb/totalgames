<?php
/* @var $this TipooperacionController */
/* @var $model Tipooperacion */

$this->breadcrumbs=array(
	'Tipooperacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tipooperacion', 'url'=>array('index')),
	array('label'=>'Manage Tipooperacion', 'url'=>array('admin')),
);
?>

<h1>Create Tipooperacion</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>