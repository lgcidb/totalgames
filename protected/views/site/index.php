
<?php
$this->widget('ext.xflexslider.XFlexSlider', array(
    'slides' => array(
        //use content
        'slide1' => array(
            'id' => 'slide1',
            'caption' => '',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/imagen1.jpg" />',
        ),
        'slide2' => array(
            'id' => 'slide2',
            'caption' => '',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/imagen2.jpg" />',
        ),
        'slide3' => array(
            'id' => 'slide3',
            'caption' => '',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/imagen3.jpg" />',
        ),
        'slide4' => array(
            'id' => 'slide4',
            'caption' => '',
            'content' => '<img src="' . Yii::app()->request->baseUrl . '/images/imagen4.jpg" />',
        ),
    ),
    'flexsliderOptions' => array(
        'animation' => "'slide'",
        'slideDirection' => 'vertical',
        'mousewheel' => true,
    ),
));
?>




