<?php
/* @var $this JuegoController */
/* @var $model Juego */

$this->breadcrumbs = array(
    'Juegos' => array('index'),
    $model->idJuego,
);

$this->menu = array(
    array('label' => 'Lista de Juegos', 'url' => array('index')),
    array('label' => 'Agregar Juego', 'url' => array('create')),
    array('label' => 'Actualizar Juego', 'url' => array('update', 'id' => $model->idJuego)),
    array('label' => 'Eliminar Juego', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->idJuego), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Administrar Juego', 'url' => array('admin')),
);
?>

<h1>Ver Juego <?php echo $model->nombreJuego; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'idJuego',
        'nombreJuego',
        'descripcionJuego',
        'requisitosJuego',
        array(
            'name' => 'Clasificacion',
            'value' => $model->idClasificacion0->tipoClasificacion,
        ),
        array(
            'name' => 'Genero',
            'value' => $model->idGenero0->nombreGenero,
        ),
        array(
            'name' => 'Idioma',
            'value' => $model->idIdioma0->nombreIdioma,
        ),
        array(
            'name' => 'Plataforma',
            'value' => $model->idPlataforma0->nombrePlataforma,
        ),
    ),
));
?>
