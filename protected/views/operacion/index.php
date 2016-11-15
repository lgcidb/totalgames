<?php
/* @var $this OperacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Operaciones',
);

$this->menu=array(
	array('label'=>'Agregar Operacion', 'url'=>array('create')),
	array('label'=>'Administrar Operacion', 'url'=>array('admin')),
);
?>

<h1>Operaciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
