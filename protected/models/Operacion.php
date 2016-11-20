<?php

/**
 * This is the model class for table "operacion".
 *
 * The followings are the available columns in table 'operacion':
 * @property integer $idOperacion
 * @property string $fechaOperacion
 * @property integer $montoOperacion
 * @property string $emailUsuario
 * @property integer $idJuego
 * @property integer $idTipoOperacion
 * @property integer $idEstadoOperacion
 *
 * The followings are the available model relations:
 * @property Juego $idJuego0
 * @property Usuario $emailUsuario0
 * @property Tipooperacion $idTipoOperacion0
 * @property Estadooperacion $idEstadoOperacion0
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
			array('fechaOperacion, montoOperacion, emailUsuario, idJuego, idTipoOperacion, idEstadoOperacion', 'required'),
			array('montoOperacion, idJuego, idTipoOperacion, idEstadoOperacion', 'numerical', 'integerOnly'=>true),
			array('emailUsuario', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idOperacion, fechaOperacion, montoOperacion, emailUsuario, idJuego, idTipoOperacion, idEstadoOperacion', 'safe', 'on'=>'search'),
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
			'idJuego0' => array(self::BELONGS_TO, 'Juego', 'idJuego'),
			'emailUsuario0' => array(self::BELONGS_TO, 'Usuario', 'emailUsuario'),
			'idTipoOperacion0' => array(self::BELONGS_TO, 'Tipooperacion', 'idTipoOperacion'),
			'idEstadoOperacion0' => array(self::BELONGS_TO, 'Estadooperacion', 'idEstadoOperacion'),
			'operacionfinals' => array(self::HAS_MANY, 'Operacionfinal', 'idOperacion'),
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
			'emailUsuario' => 'Email Usuario',
			'idJuego' => 'Juego',
			'idTipoOperacion' => 'Tipo Operacion',
			'idEstadoOperacion' => 'Estado Operacion',
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
		$criteria->compare('emailUsuario',$this->emailUsuario,true);
		$criteria->compare('idJuego',$this->idJuego);
		$criteria->compare('idTipoOperacion',$this->idTipoOperacion);
		$criteria->compare('idEstadoOperacion',$this->idEstadoOperacion);

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
