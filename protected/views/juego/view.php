<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	$model->idJuego,
);

$this->menu=array(
	array('label'=>'List Juego', 'url'=>array('index')),
	array('label'=>'Create Juego', 'url'=>array('create')),
	array('label'=>'Update Juego', 'url'=>array('update', 'id'=>$model->idJuego)),
	array('label'=>'Delete Juego', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJuego),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Juego', 'url'=>array('admin')),
);
?>

<h1>View Juego #<?php echo $model->idJuego; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idJuego',
		'nombreJuego',
		'descripcionJuego',
		'requisitosJuego',
		'clasificacionContenido_idClasificacion',
		'genero_idGenero',
		'idioma_idIdioma',
		'plataforma_idPlataforma',
	),
)); ?>
