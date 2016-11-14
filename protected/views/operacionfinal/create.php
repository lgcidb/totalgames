<?php
/* @var $this OperacionfinalController */
/* @var $model Operacionfinal */

$this->breadcrumbs=array(
	'Operacionfinals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Operacionfinal', 'url'=>array('index')),
	array('label'=>'Manage Operacionfinal', 'url'=>array('admin')),
);
?>

<h1>Create Operacionfinal</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>