<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs=array(
	'Juegos'=>array('index'),
	'Administar',
);

$this->menu=array(
	array('label'=>'Lista de Juegos', 'url'=>array('index')),
	array('label'=>'Agregar Juego', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#juego-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Juegos</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'juego-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'nombreJuego',
		'descripcionJuego',
		'requisitosJuego',
		'clasificacionContenido_idClasificacion',
		'genero_idGenero',
		'idioma_idIdioma',
		'plataforma_idPlataforma',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
