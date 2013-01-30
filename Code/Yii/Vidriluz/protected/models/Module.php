<?php

/**
 * This is the model class for table "module".
 *
 * The followings are the available columns in table 'module':
 * @property integer $oid
 * @property string $moduleid
 * @property string $modulename
 *
 * The followings are the available model relations:
 * @property Group[] $groups
 * @property Group[] $groups1
 */
class Module extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Module the static model class
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
		return 'module';
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
			array('oid', 'numerical', 'integerOnly'=>true),
			array('moduleid, modulename', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oid, moduleid, modulename', 'safe', 'on'=>'search'),
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
			'groups' => array(self::HAS_MANY, 'Group', 'module_oid'),
			'groups1' => array(self::MANY_MANY, 'Group', 'group_module(module_oid, group_oid)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid' => 'Oid',
			'moduleid' => 'Moduleid',
			'modulename' => 'Modulename',
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
		$criteria->compare('moduleid',$this->moduleid,true);
		$criteria->compare('modulename',$this->modulename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}