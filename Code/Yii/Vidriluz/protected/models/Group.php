<?php

/**
 * This is the model class for table "group".
 *
 * The followings are the available columns in table 'group':
 * @property integer $oid
 * @property string $groupname
 * @property integer $module_oid
 *
 * The followings are the available model relations:
 * @property Module $moduleO
 * @property Module[] $modules
 * @property User[] $users
 * @property User[] $users1
 */
class Group extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Group the static model class
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
		return 'group';
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
			array('oid, module_oid', 'numerical', 'integerOnly'=>true),
			array('groupname', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oid, groupname, module_oid', 'safe', 'on'=>'search'),
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
			'moduleO' => array(self::BELONGS_TO, 'Module', 'module_oid'),
			'modules' => array(self::MANY_MANY, 'Module', 'group_module(group_oid, module_oid)'),
			'users' => array(self::HAS_MANY, 'User', 'group_oid'),
			'users1' => array(self::MANY_MANY, 'User', 'user_group(group_oid, user_oid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid' => 'Oid',
			'groupname' => 'Groupname',
			'module_oid' => 'Module Oid',
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
		$criteria->compare('groupname',$this->groupname,true);
		$criteria->compare('module_oid',$this->module_oid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}