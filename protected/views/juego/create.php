<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Juegos', 'url'=>array('index')),
	array('label'=>'Administrar Juegos', 'url'=>array('admin')),
);
?>

<h1>Agregar Juego</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'idiomas' => $idiomas)); ?>