<?php
/* @var $this TipooperacionController */
/* @var $model Tipooperacion */

$this->breadcrumbs=array(
	'Tipooperacions'=>array('index'),
	$model->idTipoOperacion=>array('view','id'=>$model->idTipoOperacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tipooperacion', 'url'=>array('index')),
	array('label'=>'Create Tipooperacion', 'url'=>array('create')),
	array('label'=>'View Tipooperacion', 'url'=>array('view', 'id'=>$model->idTipoOperacion)),
	array('label'=>'Manage Tipooperacion', 'url'=>array('admin')),
);
?>

<h1>Update Tipooperacion <?php echo $model->idTipoOperacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>