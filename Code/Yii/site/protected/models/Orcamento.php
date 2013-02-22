<?php

/**
 * This is the model class for table "orcamento".
 *
 * The followings are the available columns in table 'orcamento':
 * @property integer $id
 * @property string $serie
 * @property integer $numero
 * @property string $data
 * @property string $anexos
 * @property string $estado
 * @property string $valortotal
 * @property integer $users_id
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
			array('numero, data, users_id', 'required'),
			array('numero, users_id', 'numerical', 'integerOnly'=>true),
			array('serie, estado', 'length', 'max'=>45),
			array('anexos', 'length', 'max'=>1024),
			array('valortotal', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, serie, numero, data, anexos, estado, valortotal, users_id', 'safe', 'on'=>'search'),
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
			'linhas' => array(self::HAS_MANY, 'Orcamentolinha', 'orcamento_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'serie' => 'Serie',
			'numero' => 'Numero',
			'data' => 'Data',
			'anexos' => 'Anexos',
			'estado' => 'Estado',
			'valortotal' => 'Valor Total',
			'users_id' => 'Users',
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
		$criteria->compare('serie',$this->serie,true);
		$criteria->compare('numero',$this->numero);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('anexos',$this->anexos,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('valortotal',$this->valortotal,true);
		$criteria->compare('users_id',$this->users_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function GetValorTotal(){
		$result = 0;
		foreach ($this->linhas as $l){
			$result += $l->valor;
		}	
		return number_format($result, 2, ',', ' ');
	}
	
	public function GetLinhasArray(){
		$result = array();
		foreach ($this->linhas as $l){
			array_push($result,$l->LinhaToArray());
		}
		return $result;
	}
	
	public function GetCodigo(){
		return $this->serie . '/' . $this->numero;	
	}
}