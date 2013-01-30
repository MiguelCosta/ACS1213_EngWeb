<?php

/**
 * This is the model class for table "orcamento".
 *
 * The followings are the available columns in table 'orcamento':
 * @property integer $oid
 * @property integer $serie
 * @property integer $numserie
 * @property string $data
 * @property string $anexos
 * @property string $estado
 * @property double $valortotal
 * @property integer $user_oid
 *
 * The followings are the available model relations:
 * @property User $userO
 * @property OrcamentoLinha[] $orcamentoLinhas
 */
class Orcamento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Orcamento the static model class
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
		return 'orcamento';
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
			array('oid, serie, numserie, user_oid', 'numerical', 'integerOnly'=>true),
			array('valortotal', 'numerical'),
			array('anexos, estado', 'length', 'max'=>255),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('oid, serie, numserie, data, anexos, estado, valortotal, user_oid', 'safe', 'on'=>'search'),
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
			'orcamentoLinhas' => array(self::HAS_MANY, 'OrcamentoLinha', 'orcamento_oid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'oid' => 'Oid',
			'serie' => 'Serie',
			'numserie' => 'Numserie',
			'data' => 'Data',
			'anexos' => 'Anexos',
			'estado' => 'Estado',
			'valortotal' => 'Valortotal',
			'user_oid' => 'User Oid',
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
		$criteria->compare('serie',$this->serie);
		$criteria->compare('numserie',$this->numserie);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('anexos',$this->anexos,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('valortotal',$this->valortotal);
		$criteria->compare('user_oid',$this->user_oid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}