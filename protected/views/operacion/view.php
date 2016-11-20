<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs=array(
	'Operacions'=>array('index'),
	$model->idOperacion,
);

$this->menu=array(
	array('label'=>'Lista de Operaciones', 'url'=>array('index')),
	array('label'=>'Agregar Operacion', 'url'=>array('create')),
	array('label'=>'Actualizar Operacion', 'url'=>array('update', 'id'=>$model->idOperacion)),
	array('label'=>'Eliminar Operacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idOperacion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Operaciones', 'url'=>array('admin')),
);
?>

<h1>Ver Operacion </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idOperacion',
		'fechaOperacion',
		'montoOperacion',
		'emailUsuario',
            array(
            'name' => 'Juego',
            'value' => $model->idJuego0->nombreJuego,
        ),
            array(
            'name' => 'Tipo Operacion',
            'value' => $model->idTipoOperacion0->nombreOperacion,
        ),
            array(
            'name' => 'Estado',
            'value' => $model->idEstadoOperacion0->tipoEstado,
        ),
	),
)); ?>
