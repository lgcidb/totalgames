<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->emailUsuario=>array('view','id'=>$model->emailUsuario),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Agregar Usuario', 'url'=>array('create')),
	array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->emailUsuario)),
	array('label'=>'Aministar Usuario', 'url'=>array('admin')),
);
?>

<h1>Update Usuario <?php echo $model->emailUsuario; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>