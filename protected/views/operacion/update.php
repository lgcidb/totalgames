<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operacions'=>array('index'),
	$model->idOperacion=>array('view','id'=>$model->idOperacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Operacion', 'url'=>array('index')),
	array('label'=>'Create Operacion', 'url'=>array('create')),
	array('label'=>'View Operacion', 'url'=>array('view', 'id'=>$model->idOperacion)),
	array('label'=>'Manage Operacion', 'url'=>array('admin')),
);
?>

<h1>Update Operacion <?php echo $model->idOperacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>