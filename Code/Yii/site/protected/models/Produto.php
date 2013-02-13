<?php

/**
 * This is the model class for table "produto".
 *
 * The followings are the available columns in table 'produto':
 * @property integer $id
 * @property string $nome
 * @property string $tipo
 * @property string $cor
 * @property string $padrao
 * @property string $espessura
 * @property string $dimensaomax
 * @property string $manufacturas
 * @property string $caixa
 */
class Produto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Produto the static model class
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
		return 'produto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome', 'required'),
			array('nome', 'length', 'max'=>512),
			array('tipo, cor, padrao, manufacturas, caixa', 'length', 'max'=>255),
			array('espessura, dimensaomax', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, tipo, cor, padrao, espessura, dimensaomax, manufacturas, caixa', 'safe', 'on'=>'search'),
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
			'tipo' => 'Tipo',
			'cor' => 'Cor',
			'padrao' => 'Padrao',
			'espessura' => 'Espessura',
			'dimensaomax' => 'Dimensaomax',
			'manufacturas' => 'Manufacturas',
			'caixa' => 'Caixa',
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
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('cor',$this->cor,true);
		$criteria->compare('padrao',$this->padrao,true);
		$criteria->compare('espessura',$this->espessura,true);
		$criteria->compare('dimensaomax',$this->dimensaomax,true);
		$criteria->compare('manufacturas',$this->manufacturas,true);
		$criteria->compare('caixa',$this->caixa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}