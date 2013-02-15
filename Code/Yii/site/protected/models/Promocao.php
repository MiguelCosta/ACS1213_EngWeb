<?php

/**
 * This is the model class for table "promocao".
 *
 * The followings are the available columns in table 'promocao':
 * @property integer $id
 * @property string $nome
 * @property string $descricao
 * @property string $datainicial
 * @property string $datafinal
 * @property integer $produto_id
 */
class Promocao extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Promocao the static model class
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
		return 'promocao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, descricao, datainicial, datafinal, produto_id', 'required'),
			array('produto_id', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>255),
			array('descricao', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, descricao, datainicial, datafinal, produto_id', 'safe', 'on'=>'search'),
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
			'nome' => 'Nome',
			'descricao' => 'Descricao',
			'datainicial' => 'Datainicial',
			'datafinal' => 'Datafinal',
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
		$criteria->compare('nome',$this->nome,true);
		$criteria->compare('descricao',$this->descricao,true);
		$criteria->compare('datainicial',$this->datainicial,true);
		$criteria->compare('datafinal',$this->datafinal,true);
		$criteria->compare('produto_id',$this->produto_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}