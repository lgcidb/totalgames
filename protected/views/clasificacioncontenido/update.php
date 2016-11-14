<?php
/* @var $this ClasificacioncontenidoController */
/* @var $model Clasificacioncontenido */

$this->breadcrumbs=array(
	'Clasificacioncontenidos'=>array('index'),
	$model->idClasificacion=>array('view','id'=>$model->idClasificacion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Clasificacioncontenido', 'url'=>array('index')),
	array('label'=>'Create Clasificacioncontenido', 'url'=>array('create')),
	array('label'=>'View Clasificacioncontenido', 'url'=>array('view', 'id'=>$model->idClasificacion)),
	array('label'=>'Manage Clasificacioncontenido', 'url'=>array('admin')),
);
?>

<h1>Update Clasificacioncontenido <?php echo $model->idClasificacion; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>