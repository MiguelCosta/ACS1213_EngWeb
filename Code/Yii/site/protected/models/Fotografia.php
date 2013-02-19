<?php

/**
 * This is the model class for table "fotografia".
 *
 * The followings are the available columns in table 'fotografia':
 * @property integer $id
 * @property string $path
 * @property string $descricao
 * @property integer $album_id
 * @property integer $produto_id
 */
class Fotografia extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Fotografia the static model class
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
		return 'fotografia';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('album_id, path, descricao', 'required'),
			array('album_id, produto_id', 'numerical', 'integerOnly'=>true),
			array('path, descricao', 'length', 'max'=>1024, 'on'=>'insert,update'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, album_id, produto_id', 'safe', 'on'=>'search'),
			array('path', 'file','types'=>'jpg, gif, png', 'allowEmpty'=>true, 'on'=>'update'), // this will allow empty field when page is update (remember here i create scenario update)
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
				'produto' => array(self::BELONGS_TO, 'Produto', 'produto_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'path' => 'Path',
			'descricao' => 'Descricao',
			'album_id' => 'Album',
			'produto_id' => 'Produto',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('album_id',$this->album_id);
		$criteria->compare('produto_id',$this->produto_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	
}