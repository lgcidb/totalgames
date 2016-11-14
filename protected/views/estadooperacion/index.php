<?php
/* @var $this EstadooperacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Estadooperacions',
);

$this->menu=array(
	array('label'=>'Create Estadooperacion', 'url'=>array('create')),
	array('label'=>'Manage Estadooperacion', 'url'=>array('admin')),
);
?>

<h1>Estadooperacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
