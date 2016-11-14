<?php
/* @var $this OperacionfinalController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Operacionfinals',
);

$this->menu=array(
	array('label'=>'Create Operacionfinal', 'url'=>array('create')),
	array('label'=>'Manage Operacionfinal', 'url'=>array('admin')),
);
?>

<h1>Operacionfinals</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
