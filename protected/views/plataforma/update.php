<?php
/* @var $this PlataformaController */
/* @var $model Plataforma */

$this->breadcrumbs=array(
	'Plataformas'=>array('index'),
	$model->idPlataforma=>array('view','id'=>$model->idPlataforma),
	'Update',
);

$this->menu=array(
	array('label'=>'List Plataforma', 'url'=>array('index')),
	array('label'=>'Create Plataforma', 'url'=>array('create')),
	array('label'=>'View Plataforma', 'url'=>array('view', 'id'=>$model->idPlataforma)),
	array('label'=>'Manage Plataforma', 'url'=>array('admin')),
);
?>

<h1>Update Plataforma <?php echo $model->idPlataforma; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>