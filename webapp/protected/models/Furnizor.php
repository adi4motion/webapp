<?php

/**
 * This is the model class for table "tbl_furnizor".
 *
 * The followings are the available columns in table 'tbl_furnizor':
 * @property integer $furnizorId
 * @property string $nume
 * @property string $telefon
 * @property string $email
 * @property string $parola
 * @property integer $status
 *
 * The followings are the available model relations:
 * @property Furnizorcategorie[] $furnizorcategories
 * @property Oferta[] $ofertas
 */
class Furnizor extends CActiveRecord
{
    public $verifyCode;
    public $passwordConfirm, $dropDownList, $acceptTC, $acc=1;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Furnizor the static model class
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
		return 'tbl_furnizor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nume, telefon, email, parola, passwordConfirm, acceptTC, dropDownList', 'required'),
			array('status', 'numerical', 'integerOnly'=>true),
			array('nume, email, parola', 'length', 'max'=>256),
			array('telefon', 'length', 'max'=>15),
                        array('parola','compare','compareAttribute'=>'passwordConfirm'),
                        array('passwordConfirm','compare','compareAttribute'=>'parola'),
                        array('acceptTC','compare','compareAttribute'=>'acc'),
                        array('verifyCode', 'captcha', 'allowEmpty'=>!CCaptcha::checkRequirements()),
                        //array('dropDownList','compare','compareAttribute'=>'acc'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('furnizorId, nume, telefon, email, parola, status', 'safe', 'on'=>'search'),

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
			'furnizorcategories' => array(self::HAS_MANY, 'Furnizorcategorie', 'furnizorId'),
			'ofertas' => array(self::HAS_MANY, 'Oferta', 'furnizorId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'furnizorId' => 'Furnizor',
			'nume' => 'Nume',
			'telefon' => 'Telefon',
			'email' => 'Email',
			'parola' => 'Parola',
			'status' => 'Status',
                        'acceptTC' => 'Accept Termeni si conditii',
                        'dropDownList' => 'Categorii',
                        'passwordConfirm' => 'Confirmare Parola',
                        'verifyCode' => 'Verification Code',
                    
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

		$criteria->compare('furnizorId',$this->furnizorId);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('telefon',$this->telefon,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('parola',$this->parola,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static function insertIntoFurnizorCategorie($furnizorCategories,$furnizorId){
            foreach($furnizorCategories as $furnizorCategorie)
                foreach($furnizorCategorie as $furnizorCategorieValue)
                {
                       $furnizor_categorie =new FurnizorCategorie;
                       $furnizor_categorie->furnizorId = $furnizorId;
                       $furnizor_categorie->categorieId = $furnizorCategorieValue;
                       $furnizor_categorie->save();
                 }  
        }
        
        public static function returnCategorii(){
            $tati = Categorie::model()->findAll('parentId is null');
            $list_tata = array();
            foreach($tati as $tata){
                $list_fii = array();
                $fii = Categorie::model()->findAll('parentId="'.$tata->categorieId.'"');
                foreach($fii as $fiu)
                    $list_fii[$fiu->categorieId] = $fiu->nume;
                $list_tata[$tata->nume] = $list_fii;
            }
            return $list_tata;
        }
        
        public static function insertIntoFurnizorClient($email,$parola,$tip){
            $furnizorClient = new FurnizorClient;
            $furnizorClient->email = $email;
            $furnizorClient->parola = $parola;
            $furnizorClient->tip = $tip;
            $furnizorClient->save();
        }
        
        public static function returnFurnizorIdLogat(){
            $furnizorId = Furnizor::model()->find('email="'.Yii::app()->user->id.'"'); 
            return $furnizorId->furnizorId;
        }
        
        public static function returnComenzi($furnizorId){
            $comenzi = Yii::app()->db->createCommand()
                                   ->setText('select comandaId from tbl_furnizorcomandaoferta where furnizorId="'.$furnizorId.'"')
                                   ->queryAll();
            $criteria = '';$nr = count($comenzi);$i = 1;
            foreach($comenzi as $comanda)
                if($i != $nr)
                    $criteria = $criteria.' t.comandaId="'.$comanda['comandaId'].'" and';
                else
                    $criteria = $criteria.' t.comandaId="'.$comanda['comandaId'].'"';
            $data = new CActiveDataProvider('Comanda',array('criteria'=>array('condition'=>$criteria,'limit'=>50),'pagination'=>false));
        return $data;
        }
        
        public static function returnOferte($furnizorId){
            $oferte = Yii::app()->db->createCommand()
                                   ->setText('select ofertaId from tbl_oferta where furnizorId="'.$furnizorId.'"')
                                   ->queryAll();
            $criteria = '';$nr = count($oferte);$i = 1;
            foreach($oferte as $oferta)
                if($i != $nr)
                    $criteria = $criteria.' t.ofertaId="'.$oferta['ofertaId'].'" and';
                else
                    $criteria = $criteria.' t.ofertaId="'.$oferta['ofertaId'].'"';
            $data = new CActiveDataProvider('Oferta',array('criteria'=>array('condition'=>$criteria,'limit'=>50),'pagination'=>false));
        return $data;
        }
        
        public static function returnStatusOferte(){
            $model = FurnizorComandaOferta::model()->findAll('status_oferta is not null');
            if($model)
                return true;
            else                 
                return false;
        }
        
        public static function returnStatusComenzi(){
            $model = FurnizorComandaOferta::model()->findAll('status_comanda is not null');
            if($model)
                return true;
            else                 
                return false;
        }
        
        public static function setStatus($id,$attribute,$value){
            $set_status = FurnizorComandaOferta::model()->find($attribute.'="'.$id.'"');
            if($set_status){
                if($attribute == 'ofertaId')
                    $status = 'status_oferta';
                else
                    $status = 'status_comanda';
                $set_status->$status = $value;
                $set_status->save();
            }
        }
        
        public static function insertIntoFurnizorComandaOferta($comandaId,$furnizorId,$ofertaId){
            $model2 = FurnizorComandaOferta::model()->find($attribute.'="'.$id.'"');
            $model2->furnizorId = $furnizorId;
            $model2->ofertaId = $ofertaId;
            $model2->save();
        }
}