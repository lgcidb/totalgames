<?php
/* @var $this OperacionController */
/* @var $model Operacion */

$this->breadcrumbs = array(
    'Operaciones' => array('index'),
    'Administrar',
);

$this->menu = array(
    array('label' => 'Lista de Operaciones', 'url' => array('index')),
    array('label' => 'Agregar Operacion', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#operacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Operaciones</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'operacion-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'fechaOperacion',
        'montoOperacion',
        'emailUsuario',
        array(
            'name' => 'idJuego',
            'filter' => CHtml::listData(Juego::model()->findAll(array('order' => 'nombreJuego')), 'idJuego', 'nombreJuego'),
            'value' => '$data->idJuego0->nombreJuego',
        ),
        array(
            'name' => 'idTipoOperacion',
            'filter' => CHtml::listData(Tipooperacion::model()->findAll(array('order' => 'nombreOperacion')), 'idTipoOperacion', 'nombreOperacion'),
            'value' => '$data->idTipoOperacion0->nombreOperacion',
        ),
        array(
            'name' => 'idEstadoOperacion',
            'filter' => CHtml::listData(Estadooperacion::model()->findAll(array('order' => 'tipoEstado')), 'idEstadoOperacion', 'tipoEstado'),
            'value' => '$data->idEstadoOperacion0->tipoEstado',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
