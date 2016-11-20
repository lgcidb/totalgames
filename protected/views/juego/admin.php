<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs = array(
    'Juegos' => array('index'),
    'Administrar',
);

$this->menu = array(
    array('label' => 'Lista de Juegos', 'url' => array('index')),
    array('label' => 'Agregar Juego', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#juego-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Juegos</h1>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'juego-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'nombreJuego',
        'descripcionJuego',
        'requisitosJuego',
        array(
            'name' => 'idClasificacion',
            'filter'=> CHtml::listData(Clasificacioncontenido::model()->findAll(array('order'=>'tipoClasificacion')), 'idClasificacion', 'tipoClasificacion'),
            'value' => '$data->idClasificacion0->tipoClasificacion',
        ),
        array(
            'name' => 'idGenero',
            'filter'=> CHtml::listData(Genero::model()->findAll(array('order'=>'nombreGenero')), 'idGenero', 'nombreGenero'),
            'value' => '$data->idGenero0->nombreGenero',
        ),
        array(
            'name' => 'idIdioma',
            'filter'=> CHtml::listData(Idioma::model()->findAll(array('order'=>'nombreIdioma')), 'idIdioma', 'nombreIdioma'),
            'value' => '$data->idIdioma0->nombreIdioma',
        ),
        array(
            'name' => 'idPlataforma',
            'filter'=> CHtml::listData(Plataforma::model()->findAll(array('order'=>'nombrePlataforma')), 'idPlataforma', 'nombrePlataforma'),
            'value' => '$data->idPlataforma0->nombrePlataforma',
        ),
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>
