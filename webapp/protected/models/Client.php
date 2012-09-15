<?php

/**
 * This is the model class for table "tbl_client".
 *
 * The followings are the available columns in table 'tbl_client':
 * @property integer $clientId
 * @property string $nume
 * @property string $telefon
 * @property string $email
 * @property string $parola
 * @property integer $acces
 *
 * The followings are the available model relations:
 * @property Comanda[] $comandas
 */
class Client extends CActiveRecord
{  
    public $passwordConfirm, $acceptTAC, $acc=1;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Client the static model class
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
		return 'tbl_client';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nume, telefon, email, parola', 'required'),
			array('acces', 'numerical', 'integerOnly'=>true),
			array('nume, email, parola', 'length', 'max'=>256),
                        array('email', 'email'),
                        array('email', 'unique'),
                        array('acceptTAC', 'compare','compareAttribute'=>'acc'),
			array('telefon', 'length', 'max'=>15),
                        array('parola', 'compare', 'compareAttribute'=>'passwordConfirm','message'=>'Parolele nu se potrivesc'),
			array('passwordConfirm', 'compare', 'compareAttribute'=>'parola','message'=>''),
                        // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('clientId, nume, telefon, email, parola, acces', 'safe', 'on'=>'search'),
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
			'comandas' => array(self::HAS_MANY, 'Comanda', 'clientId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'clientId' => 'Client',
			'nume' => 'Nume',
			'telefon' => 'Telefon',
			'email' => 'Email',
			'parola' => 'Parola',
			'acces' => 'Acces',
                        'passwordConfirm' => 'Repeta Parola',
                        'acceptTAC' => 'Sunt de acord cu Termenii si Conditiile.'
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

		$criteria->compare('clientId',$this->clientId);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('parola',$this->parola,true);
		$criteria->compare('acces',$this->acces);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}