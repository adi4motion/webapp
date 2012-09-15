<?php

/**
 * This is the model class for table "tbl_oferta".
 *
 * The followings are the available columns in table 'tbl_oferta':
 * @property integer $ofertaId
 * @property integer $comandaId
 * @property integer $furnizorId
 * @property string $nume
 * @property string $continut
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 * @property Comanda $comanda
 * @property Furnizor $furnizor
 */
class Oferta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Oferta the static model class
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
		return 'tbl_oferta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comandaId, furnizorId, nume, continut, data', 'required'),
			array('comandaId, furnizorId', 'numerical', 'integerOnly'=>true),
			array('nume', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ofertaId, comandaId, furnizorId, nume, continut, data', 'safe', 'on'=>'search'),
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
			'comandas' => array(self::HAS_MANY, 'Comanda', 'ofertaId'),
			'comanda' => array(self::BELONGS_TO, 'Comanda', 'comandaId'),
			'furnizor' => array(self::BELONGS_TO, 'Furnizor', 'furnizorId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ofertaId' => 'Oferta',
			'comandaId' => 'Comanda',
			'furnizorId' => 'Furnizor',
			'nume' => 'Nume',
			'continut' => 'Continut',
			'data' => 'Data',
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

		$criteria->compare('ofertaId',$this->ofertaId);
		$criteria->compare('comandaId',$this->comandaId);
		$criteria->compare('furnizorId',$this->furnizorId);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('continut',$this->continut,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}