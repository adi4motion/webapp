<?php

/**
 * This is the model class for table "tbl_users".
 *
 * The followings are the available columns in table 'tbl_users':
 * @property string $username
 * @property string $role
 * @property integer $clientId
 * @property integer $furnizorId
 *
 * The followings are the available model relations:
 * @property Client $client
 * @property Furnizor $furnizor
 */
class Users extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Users the static model class
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
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, role', 'required'),
			array('clientId, furnizorId', 'numerical', 'integerOnly'=>true),
			array('username, role', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('username, role, clientId, furnizorId', 'safe', 'on'=>'search'),
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
			'client' => array(self::BELONGS_TO, 'Client', 'clientId'),
			'furnizor' => array(self::BELONGS_TO, 'Furnizor', 'furnizorId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'username' => 'Username',
			'role' => 'Role',
			'clientId' => 'Client',
			'furnizorId' => 'Furnizor',
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

		$criteria->compare('username',$this->username,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('clientId',$this->clientId);
		$criteria->compare('furnizorId',$this->furnizorId);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}