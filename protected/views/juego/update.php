<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	$model->idJuego=>array('view','id'=>$model->idJuego),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Juegos', 'url'=>array('index')),
	array('label'=>'Agregar Juego', 'url'=>array('create')),
	array('label'=>'Ver Juego', 'url'=>array('view', 'id'=>$model->idJuego)),
	array('label'=>'Administar Juegos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Juego <?php echo $model->idJuego; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>