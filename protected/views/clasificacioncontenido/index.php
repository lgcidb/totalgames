<?php
/* @var $this ClasificacioncontenidoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Clasificacioncontenidos',
);

$this->menu=array(
	array('label'=>'Create Clasificacioncontenido', 'url'=>array('create')),
	array('label'=>'Manage Clasificacioncontenido', 'url'=>array('admin')),
);
?>

<h1>Clasificacioncontenidos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
