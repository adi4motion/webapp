<?php

/**
 * This is the model class for table "tbl_furnizorcomandaoferta".
 *
 * The followings are the available columns in table 'tbl_furnizorcomandaoferta':
 * @property integer $id
 * @property integer $furnizorId
 * @property integer $comandaId
 * @property integer $ofertaId
 * @property integer $status_oferta
 * @property integer $status_comanda
 *
 * The followings are the available model relations:
 * @property Comanda $comanda
 * @property Furnizor $furnizor
 * @property Oferta $oferta
 */
class FurnizorComandaOferta extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return FurnizorComandaOferta the static model class
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
		return 'tbl_furnizorcomandaoferta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('furnizorId, comandaId, ofertaId, status_oferta, status_comanda', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, furnizorId, comandaId, ofertaId, status_oferta, status_comanda', 'safe', 'on'=>'search'),
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
			'comanda' => array(self::BELONGS_TO, 'Comanda', 'comandaId'),
			'furnizor' => array(self::BELONGS_TO, 'Furnizor', 'furnizorId'),
			'oferta' => array(self::BELONGS_TO, 'Oferta', 'ofertaId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'furnizorId' => 'Furnizor',
			'comandaId' => 'Comanda',
			'ofertaId' => 'Oferta',
			'status_oferta' => 'Status Oferta',
			'status_comanda' => 'Status Comanda',
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
		$criteria->compare('furnizorId',$this->furnizorId);
		$criteria->compare('comandaId',$this->comandaId);
		$criteria->compare('ofertaId',$this->ofertaId);
		$criteria->compare('status_oferta',$this->status_oferta);
		$criteria->compare('status_comanda',$this->status_comanda);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}