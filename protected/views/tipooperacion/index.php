<?php
/* @var $this TipooperacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipooperacions',
);

$this->menu=array(
	array('label'=>'Create Tipooperacion', 'url'=>array('create')),
	array('label'=>'Manage Tipooperacion', 'url'=>array('admin')),
);
?>

<h1>Tipooperacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
