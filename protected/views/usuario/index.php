<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Usuarios',
);

$this->menu=array(
	array('label'=>'Agregar Usuario', 'url'=>array('create')),
	array('label'=>'Aministrar Usuario', 'url'=>array('admin')),
);
?>

<h1>Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
