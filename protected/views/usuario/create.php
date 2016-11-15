<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Agregar',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Administar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Agregar Usuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>