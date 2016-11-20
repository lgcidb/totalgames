<?php

/**
 * This is the model class for table "juego".
 *
 * The followings are the available columns in table 'juego':
 * @property integer $idJuego
 * @property string $nombreJuego
 * @property string $descripcionJuego
 * @property string $requisitosJuego
 * @property integer $idClasificacion
 * @property integer $idGenero
 * @property integer $idIdioma
 * @property integer $idPlataforma
 *
 * The followings are the available model relations:
 * @property Idioma $idIdioma0
 * @property Plataforma $idPlataforma0
 * @property Clasificacioncontenido $idClasificacion0
 * @property Genero $idGenero0
 * @property Operacion[] $operacions
 */
class Juego extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'juego';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreJuego, descripcionJuego, idClasificacion, idGenero, idIdioma, idPlataforma', 'required'),
			array('idClasificacion, idGenero, idIdioma, idPlataforma', 'numerical', 'integerOnly'=>true),
			array('nombreJuego, descripcionJuego', 'length', 'max'=>45),
			array('requisitosJuego', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idJuego, nombreJuego, descripcionJuego, requisitosJuego, idClasificacion, idGenero, idIdioma, idPlataforma', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idIdioma0' => array(self::BELONGS_TO, 'Idioma', 'idIdioma'),
			'idPlataforma0' => array(self::BELONGS_TO, 'Plataforma', 'idPlataforma'),
			'idClasificacion0' => array(self::BELONGS_TO, 'Clasificacioncontenido', 'idClasificacion'),
			'idGenero0' => array(self::BELONGS_TO, 'Genero', 'idGenero'),
			'operacions' => array(self::HAS_MANY, 'Operacion', 'idJuego'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idJuego' => 'Id Juego',
			'nombreJuego' => 'Nombre Juego',
			'descripcionJuego' => 'Descripcion Juego',
			'requisitosJuego' => 'Requisitos Juego',
			'idClasificacion' => 'Clasificacion',
			'idGenero' => 'Genero',
			'idIdioma' => 'Idioma',
			'idPlataforma' => 'Plataforma',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idJuego',$this->idJuego);
		$criteria->compare('nombreJuego',$this->nombreJuego,true);
		$criteria->compare('descripcionJuego',$this->descripcionJuego,true);
		$criteria->compare('requisitosJuego',$this->requisitosJuego,true);
		$criteria->compare('idClasificacion',$this->idClasificacion);
		$criteria->compare('idGenero',$this->idGenero);
		$criteria->compare('idIdioma',$this->idIdioma);
		$criteria->compare('idPlataforma',$this->idPlataforma);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Juego the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
