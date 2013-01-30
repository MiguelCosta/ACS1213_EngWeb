<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $user_oid
 * @property string $nomecompleto
 * @property string $telefone
 * @property string $datanascimento
 * @property integer $particular
 * @property string $empresa
 * @property string $contacto
 *
 * The followings are the available model relations:
 * @property User $userO
 */
class Cliente extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_oid', 'required'),
			array('user_oid, particular', 'numerical', 'integerOnly'=>true),
			array('nomecompleto, telefone, empresa, contacto', 'length', 'max'=>255),
			array('datanascimento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_oid, nomecompleto, telefone, datanascimento, particular, empresa, contacto', 'safe', 'on'=>'search'),
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
			'userO' => array(self::BELONGS_TO, 'User', 'user_oid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'user_oid' => 'User Oid',
			'nomecompleto' => 'Nomecompleto',
			'telefone' => 'Telefone',
			'datanascimento' => 'Datanascimento',
			'particular' => 'Particular',
			'empresa' => 'Empresa',
			'contacto' => 'Contacto',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('user_oid',$this->user_oid);
		$criteria->compare('nomecompleto',$this->nomecompleto,true);
		$criteria->compare('telefone',$this->telefone,true);
		$criteria->compare('datanascimento',$this->datanascimento,true);
		$criteria->compare('particular',$this->particular);
		$criteria->compare('empresa',$this->empresa,true);
		$criteria->compare('contacto',$this->contacto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}