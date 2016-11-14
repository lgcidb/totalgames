<?php

/**
 * This is the model class for table "juego".
 *
 * The followings are the available columns in table 'juego':
 * @property integer $idJuego
 * @property string $nombreJuego
 * @property string $descripcionJuego
 * @property string $requisitosJuego
 * @property integer $clasificacionContenido_idClasificacion
 * @property integer $genero_idGenero
 * @property integer $idioma_idIdioma
 * @property integer $plataforma_idPlataforma
 *
 * The followings are the available model relations:
 * @property Idioma $idiomaIdIdioma
 * @property Plataforma $plataformaIdPlataforma
 * @property Clasificacióncontenido $clasificacionContenidoIdClasificacion
 * @property Genero $generoIdGenero
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
			array('nombreJuego, descripcionJuego, clasificacionContenido_idClasificacion, genero_idGenero, idioma_idIdioma, plataforma_idPlataforma', 'required'),
			array('clasificacionContenido_idClasificacion, genero_idGenero, idioma_idIdioma, plataforma_idPlataforma', 'numerical', 'integerOnly'=>true),
			array('nombreJuego, descripcionJuego', 'length', 'max'=>45),
			array('requisitosJuego', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idJuego, nombreJuego, descripcionJuego, requisitosJuego, clasificacionContenido_idClasificacion, genero_idGenero, idioma_idIdioma, plataforma_idPlataforma', 'safe', 'on'=>'search'),
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
			'idiomaIdIdioma' => array(self::BELONGS_TO, 'Idioma', 'idioma_idIdioma'),
			'plataformaIdPlataforma' => array(self::BELONGS_TO, 'Plataforma', 'plataforma_idPlataforma'),
			'clasificacionContenidoIdClasificacion' => array(self::BELONGS_TO, 'Clasificacióncontenido', 'clasificacionContenido_idClasificacion'),
			'generoIdGenero' => array(self::BELONGS_TO, 'Genero', 'genero_idGenero'),
			'operacions' => array(self::HAS_MANY, 'Operacion', 'Juego_idJuego'),
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
			'clasificacionContenido_idClasificacion' => 'Clasificacion Contenido Id Clasificacion',
			'genero_idGenero' => 'Genero Id Genero',
			'idioma_idIdioma' => 'Idioma Id Idioma',
			'plataforma_idPlataforma' => 'Plataforma Id Plataforma',
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
		$criteria->compare('clasificacionContenido_idClasificacion',$this->clasificacionContenido_idClasificacion);
		$criteria->compare('genero_idGenero',$this->genero_idGenero);
		$criteria->compare('idioma_idIdioma',$this->idioma_idIdioma);
		$criteria->compare('plataforma_idPlataforma',$this->plataforma_idPlataforma);

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
