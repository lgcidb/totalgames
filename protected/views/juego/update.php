<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	$model->idJuego=>array('view','id'=>$model->idJuego),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Juegos', 'url'=>array('index')),
	array('label'=>'Agregar Juego', 'url'=>array('create')),
	array('label'=>'Ver Juego', 'url'=>array('view', 'id'=>$model->idJuego)),
	array('label'=>'Administrar Juego', 'url'=>array('admin')),
);
?>

<h1>Actualizar Juego</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>