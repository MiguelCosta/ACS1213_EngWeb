<?php

/**
 * This is the model class for table "encomendalinha".
 *
 * The followings are the available columns in table 'encomendalinha':
 * @property integer $id
 * @property string $descricao
 * @property integer $encomenda_id
 * @property integer $produto_id
 */
class Encomendalinha extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Encomendalinha the static model class
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
		return 'encomendalinha';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, encomenda_id, produto_id', 'required'),
			array('encomenda_id, produto_id', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>512),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, encomenda_id, produto_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'descricao' => 'Descricao',
			'encomenda_id' => 'Encomenda',
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
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('encomenda_id',$this->encomenda_id);
		$criteria->compare('produto_id',$this->produto_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function LinhaToArray(){
		$produto = Produto::model()->findByPk($this->produto_id);
		return array($this->id, $this->descricao, $produto->nome);
	}
}