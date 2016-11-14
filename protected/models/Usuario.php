<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $emailUsuario
 * @property string $nombreUsuario
 * @property integer $claveUsuario
 * @property double $valoracionUsuario
 *
 * The followings are the available model relations:
 * @property Operacion[] $operacions
 * @property Operacionfinal[] $operacionfinals
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emailUsuario, nombreUsuario, claveUsuario', 'required'),
			array('claveUsuario', 'numerical', 'integerOnly'=>true),
			array('valoracionUsuario', 'numerical'),
			array('emailUsuario, nombreUsuario', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('emailUsuario, nombreUsuario, claveUsuario, valoracionUsuario', 'safe', 'on'=>'search'),
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
			'operacions' => array(self::HAS_MANY, 'Operacion', 'Usuario_emailUsuario'),
			'operacionfinals' => array(self::HAS_MANY, 'Operacionfinal', 'Usuario_emailUsuarioFinal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'emailUsuario' => 'Email Usuario',
			'nombreUsuario' => 'Nombre Usuario',
			'claveUsuario' => 'Clave Usuario',
			'valoracionUsuario' => 'Valoracion Usuario',
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

		$criteria->compare('emailUsuario',$this->emailUsuario,true);
		$criteria->compare('nombreUsuario',$this->nombreUsuario,true);
		$criteria->compare('claveUsuario',$this->claveUsuario);
		$criteria->compare('valoracionUsuario',$this->valoracionUsuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
