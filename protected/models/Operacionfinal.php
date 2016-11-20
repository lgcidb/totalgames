<?php

/**
 * This is the model class for table "operacionfinal".
 *
 * The followings are the available columns in table 'operacionfinal':
 * @property integer $idOperacionFinal
 * @property string $fechaOperacionFinal
 * @property integer $idOperacion
 * @property string $emailUsuarioFinal
 *
 * The followings are the available model relations:
 * @property Operacion $idOperacion0
 * @property Usuario $emailUsuarioFinal0
 */
class Operacionfinal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'operacionfinal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fechaOperacionFinal, idOperacion, emailUsuarioFinal', 'required'),
			array('idOperacion', 'numerical', 'integerOnly'=>true),
			array('emailUsuarioFinal', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idOperacionFinal, fechaOperacionFinal, idOperacion, emailUsuarioFinal', 'safe', 'on'=>'search'),
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
			'idOperacion0' => array(self::BELONGS_TO, 'Operacion', 'idOperacion'),
			'emailUsuarioFinal0' => array(self::BELONGS_TO, 'Usuario', 'emailUsuarioFinal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idOperacionFinal' => 'Id Operacion Final',
			'fechaOperacionFinal' => 'Fecha Operacion Final',
			'idOperacion' => 'Id Operacion',
			'emailUsuarioFinal' => 'Email Usuario Final',
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

		$criteria->compare('idOperacionFinal',$this->idOperacionFinal);
		$criteria->compare('fechaOperacionFinal',$this->fechaOperacionFinal,true);
		$criteria->compare('idOperacion',$this->idOperacion);
		$criteria->compare('emailUsuarioFinal',$this->emailUsuarioFinal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Operacionfinal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
