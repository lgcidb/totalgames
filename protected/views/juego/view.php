<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	$model->idJuego,
);

$this->menu=array(
	array('label'=>'Lista de Juegos', 'url'=>array('index')),
	array('label'=>'Agregar Juego', 'url'=>array('create')),
	array('label'=>'Actualizar Juego', 'url'=>array('update', 'id'=>$model->idJuego)),
	array('label'=>'Eliminar Juego', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idJuego),'confirm'=>'Esta seguro de eliminar?')),
	array('label'=>'Administrar Juego', 'url'=>array('admin')),
);
?>

<h1>Juego #<?php echo $model->idJuego; ?></h1>

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
