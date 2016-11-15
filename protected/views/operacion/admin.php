<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operaciones'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Operaciones', 'url'=>array('index')),
	array('label'=>'Agregar Operacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#operacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Operaciones</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'operacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idOperacion',
		'fechaOperacion',
		'montoOperacion',
		'Usuario_emailUsuario',
		'Juego_idJuego',
		'tipoOperacion_idTipoOperacion',
		'estadoOperacion_idEstadoOperacion',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
