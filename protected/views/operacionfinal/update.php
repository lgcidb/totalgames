<?php
/* @var $this OperacionfinalController */
/* @var $model Operacionfinal */

$this->breadcrumbs=array(
	'Operacionfinals'=>array('index'),
	$model->idOperacionFinal=>array('view','id'=>$model->idOperacionFinal),
	'Update',
);

$this->menu=array(
	array('label'=>'List Operacionfinal', 'url'=>array('index')),
	array('label'=>'Create Operacionfinal', 'url'=>array('create')),
	array('label'=>'View Operacionfinal', 'url'=>array('view', 'id'=>$model->idOperacionFinal)),
	array('label'=>'Manage Operacionfinal', 'url'=>array('admin')),
);
?>

<h1>Update Operacionfinal <?php echo $model->idOperacionFinal; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>