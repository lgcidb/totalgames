<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	$model->idJuego=>array('view','id'=>$model->idJuego),
	'Update',
);

$this->menu=array(
	array('label'=>'List Juego', 'url'=>array('index')),
	array('label'=>'Create Juego', 'url'=>array('create')),
	array('label'=>'View Juego', 'url'=>array('view', 'id'=>$model->idJuego)),
	array('label'=>'Manage Juego', 'url'=>array('admin')),
);
?>

<h1>Update Juego <?php echo $model->idJuego; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>