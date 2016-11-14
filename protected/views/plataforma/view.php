<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */

$this->breadcrumbs=array(
	'Plataformas'=>array('index'),
	$model->idPlataforma,
);

$this->menu=array(
	array('label'=>'List Plataforma', 'url'=>array('index')),
	array('label'=>'Create Plataforma', 'url'=>array('create')),
	array('label'=>'Update Plataforma', 'url'=>array('update', 'id'=>$model->idPlataforma)),
	array('label'=>'Delete Plataforma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPlataforma),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Plataforma', 'url'=>array('admin')),
);
?>

<h1>View Plataforma #<?php echo $model->idPlataforma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPlataforma',
		'nombrePlataforma',
	),
)); ?>
