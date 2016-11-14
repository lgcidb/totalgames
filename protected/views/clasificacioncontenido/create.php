<?php
/* @var $this ClasificacioncontenidoController */
/* @var $model Clasificacioncontenido */

$this->breadcrumbs=array(
	'Clasificacioncontenidos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Clasificacioncontenido', 'url'=>array('index')),
	array('label'=>'Manage Clasificacioncontenido', 'url'=>array('admin')),
);
?>

<h1>Create Clasificacioncontenido</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>