<?php

/**
 * This is the model class for table "encomenda_linha".
 *
 * The followings are the available columns in table 'encomenda_linha':
 * @property integer $oid
 * @property string $descricao
 * @property integer $encomenda_oid
 * @property integer $produto_oid
 *
 * The followings are the available model relations:
 * @property Produto $produtoO
 * @property Encomenda $encomendaO
 */
class EncomendaLinha extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return EncomendaLinha the static model class
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
		return 'encomenda_linha';
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
			array('oid, encomenda_oid, produto_oid', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oid, descricao, encomenda_oid, produto_oid', 'safe', 'on'=>'search'),
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
			'produtoO' => array(self::BELONGS_TO, 'Produto', 'produto_oid'),
			'encomendaO' => array(self::BELONGS_TO, 'Encomenda', 'encomenda_oid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid' => 'Oid',
			'descricao' => 'Descricao',
			'encomenda_oid' => 'Encomenda Oid',
			'produto_oid' => 'Produto Oid',
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
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('encomenda_oid',$this->encomenda_oid);
		$criteria->compare('produto_oid',$this->produto_oid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}