<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $oid
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $group_oid
 *
 * The followings are the available model relations:
 * @property Cliente $cliente
 * @property Encomenda[] $encomendas
 * @property Orcamento[] $orcamentos
 * @property Group $groupO
 * @property Group[] $groups
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('oid', 'required'),
			array('oid, group_oid', 'numerical', 'integerOnly'=>true),
			array('username, password, email', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oid, username, password, email, group_oid', 'safe', 'on'=>'search'),
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
			'cliente' => array(self::HAS_ONE, 'Cliente', 'user_oid'),
			'encomendas' => array(self::HAS_MANY, 'Encomenda', 'user_oid'),
			'orcamentos' => array(self::HAS_MANY, 'Orcamento', 'user_oid'),
			'groupO' => array(self::BELONGS_TO, 'Group', 'group_oid'),
			'groups' => array(self::MANY_MANY, 'Group', 'user_group(user_oid, group_oid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid' => 'Oid',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'group_oid' => 'Group Oid',
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

		$criteria->compare('oid',$this->oid);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('group_oid',$this->group_oid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}