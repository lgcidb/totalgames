<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operacions'=>array('index'),
	$model->idOperacion,
);

$this->menu=array(
	array('label'=>'List Operacion', 'url'=>array('index')),
	array('label'=>'Create Operacion', 'url'=>array('create')),
	array('label'=>'Update Operacion', 'url'=>array('update', 'id'=>$model->idOperacion)),
	array('label'=>'Delete Operacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOperacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Operacion', 'url'=>array('admin')),
);
?>

<h1>View Operacion #<?php echo $model->idOperacion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOperacion',
		'fechaOperacion',
		'montoOperacion',
		'emailUsuario',
		'idJuego',
		'idTipoOperacion',
		'idEstadoOperacion',
	),
)); ?>
