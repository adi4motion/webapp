<?php

/**
 * This is the model class for table "tbl_comanda".
 *
 * The followings are the available columns in table 'tbl_comanda':
 * @property integer $comandaId
 * @property integer $clientId
 * @property string $nume
 * @property string $continut
 * @property integer $categorieId
 * @property string $data
 * @property integer $raspuns
 * @property integer $ofertaId
 *
 * The followings are the available model relations:
 * @property Categorie $categorie
 * @property Client $client
 * @property Oferta $oferta
 * @property Oferta[] $ofertas
 */
class Comanda extends CActiveRecord
{       public $topcategorieId;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comanda the static model class
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
		return 'tbl_comanda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('clientId, nume, continut, categorieId, data', 'required'),
			array('clientId, categorieId, raspuns, ofertaId', 'numerical', 'integerOnly'=>true),
			array('nume', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('comandaId, clientId, nume, continut, categorieId, data, raspuns, ofertaId', 'safe', 'on'=>'search'),
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
			'categorie' => array(self::BELONGS_TO, 'Categorie', 'categorieId'),
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
			'oferta' => array(self::BELONGS_TO, 'Oferta', 'ofertaId'),
			'ofertas' => array(self::HAS_MANY, 'Oferta', 'comandaId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'comandaId' => 'Comanda',
			'clientId' => 'Client',
			'nume' => 'Nume',
			'continut' => 'Continut',
			'categorieId' => 'Categorie',
			'data' => 'Data',
			'raspuns' => 'Raspuns',
			'ofertaId' => 'Oferta',
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

		$criteria->compare('comandaId',$this->comandaId);
		$criteria->compare('clientId',$this->clientId);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('continut',$this->continut,true);
		$criteria->compare('categorieId',$this->categorieId);
		$criteria->compare('data',$this->data,true);
		$criteria->compare('raspuns',$this->raspuns);
		$criteria->compare('ofertaId',$this->ofertaId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}