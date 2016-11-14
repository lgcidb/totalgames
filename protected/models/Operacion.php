<?php

/**
 * This is the model class for table "operacion".
 *
 * The followings are the available columns in table 'operacion':
 * @property integer $idOperacion
 * @property string $fechaOperacion
 * @property integer $montoOperacion
 * @property string $Usuario_emailUsuario
 * @property integer $Juego_idJuego
 * @property integer $tipoOperacion_idTipoOperacion
 * @property integer $estadoOperacion_idEstadoOperacion
 *
 * The followings are the available model relations:
 * @property Juego $juegoIdJuego
 * @property Usuario $usuarioEmailUsuario
 * @property Tipooperacion $tipoOperacionIdTipoOperacion
 * @property Estadooperacion $estadoOperacionIdEstadoOperacion
 * @property Operacionfinal[] $operacionfinals
 */
class Operacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'operacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaOperacion, montoOperacion, Usuario_emailUsuario, Juego_idJuego, tipoOperacion_idTipoOperacion, estadoOperacion_idEstadoOperacion', 'required'),
			array('montoOperacion, Juego_idJuego, tipoOperacion_idTipoOperacion, estadoOperacion_idEstadoOperacion', 'numerical', 'integerOnly'=>true),
			array('Usuario_emailUsuario', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idOperacion, fechaOperacion, montoOperacion, Usuario_emailUsuario, Juego_idJuego, tipoOperacion_idTipoOperacion, estadoOperacion_idEstadoOperacion', 'safe', 'on'=>'search'),
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
			'juegoIdJuego' => array(self::BELONGS_TO, 'Juego', 'Juego_idJuego'),
			'usuarioEmailUsuario' => array(self::BELONGS_TO, 'Usuario', 'Usuario_emailUsuario'),
			'tipoOperacionIdTipoOperacion' => array(self::BELONGS_TO, 'Tipooperacion', 'tipoOperacion_idTipoOperacion'),
			'estadoOperacionIdEstadoOperacion' => array(self::BELONGS_TO, 'Estadooperacion', 'estadoOperacion_idEstadoOperacion'),
			'operacionfinals' => array(self::HAS_MANY, 'Operacionfinal', 'Operacion_idOperacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idOperacion' => 'Id Operacion',
			'fechaOperacion' => 'Fecha Operacion',
			'montoOperacion' => 'Monto Operacion',
			'Usuario_emailUsuario' => 'Usuario Email Usuario',
			'Juego_idJuego' => 'Juego Id Juego',
			'tipoOperacion_idTipoOperacion' => 'Tipo Operacion Id Tipo Operacion',
			'estadoOperacion_idEstadoOperacion' => 'Estado Operacion Id Estado Operacion',
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

		$criteria->compare('idOperacion',$this->idOperacion);
		$criteria->compare('fechaOperacion',$this->fechaOperacion,true);
		$criteria->compare('montoOperacion',$this->montoOperacion);
		$criteria->compare('Usuario_emailUsuario',$this->Usuario_emailUsuario,true);
		$criteria->compare('Juego_idJuego',$this->Juego_idJuego);
		$criteria->compare('tipoOperacion_idTipoOperacion',$this->tipoOperacion_idTipoOperacion);
		$criteria->compare('estadoOperacion_idEstadoOperacion',$this->estadoOperacion_idEstadoOperacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Operacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
