<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Juego', 'url'=>array('index')),
	array('label'=>'Manage Juego', 'url'=>array('admin')),
);
?>

<h1>Create Juego</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>