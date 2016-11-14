<?php
/* @var $this GeneroController */
/* @var $model Genero */

$this->breadcrumbs=array(
	'Generos'=>array('index'),
	$model->idGenero=>array('view','id'=>$model->idGenero),
	'Update',
);

$this->menu=array(
	array('label'=>'List Genero', 'url'=>array('index')),
	array('label'=>'Create Genero', 'url'=>array('create')),
	array('label'=>'View Genero', 'url'=>array('view', 'id'=>$model->idGenero)),
	array('label'=>'Manage Genero', 'url'=>array('admin')),
);
?>

<h1>Update Genero <?php echo $model->idGenero; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>