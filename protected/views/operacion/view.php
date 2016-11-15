<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operacions'=>array('index'),
	$model->idOperacion,
);

$this->menu=array(
	array('label'=>'Lista de Operaciones', 'url'=>array('index')),
	array('label'=>'Agregar Operacion', 'url'=>array('create')),
	array('label'=>'Actualizar Operacion', 'url'=>array('update', 'id'=>$model->idOperacion)),
	array('label'=>'Eliminar Operacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOperacion),'confirm'=>'Esta seguro de eliminar?')),
	array('label'=>'Administrar Operacion', 'url'=>array('admin')),
);
?>

<h1>Ver Operacion #<?php echo $model->idOperacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOperacion',
		'fechaOperacion',
		'montoOperacion',
		'Usuario_emailUsuario',
		'Juego_idJuego',
		'tipoOperacion_idTipoOperacion',
		'estadoOperacion_idEstadoOperacion',
	),
)); ?>
