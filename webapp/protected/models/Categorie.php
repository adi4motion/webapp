<?php

/**
 * This is the model class for table "tbl_categorie".
 *
 * The followings are the available columns in table 'tbl_categorie':
 * @property integer $categorieId
 * @property integer $parentId
 * @property string $nume
 * @property string $descriere
 * @property string $metaTitlu
 * @property string $metaDescriere
 * @property string $titluImg
 * @property string $altImg
 * @property string $img
 * @property string $keywords
 *
 * The followings are the available model relations:
 * @property Categorie $parent
 * @property Categorie[] $categories
 * @property Comanda[] $comandas
 * @property Furnizorcategorie[] $furnizorcategories
 */
class Categorie extends CActiveRecord
{       
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Categorie the static model class
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
		return 'tbl_categorie';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nume, descriere', 'required'),
			array('parentId', 'numerical', 'integerOnly'=>true),
			array('nume, metaTitlu, titluImg, altImg, img, keywords', 'length', 'max'=>256),
			array('metaDescriere', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('categorieId, parentId, nume, descriere, metaTitlu, metaDescriere, titluImg, altImg, img, keywords', 'safe', 'on'=>'search'),
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
			'parent' => array(self::BELONGS_TO, 'Categorie', 'parentId'),
			'categories' => array(self::HAS_MANY, 'Categorie', 'parentId'),
			'comandas' => array(self::HAS_MANY, 'Comanda', 'categorieId'),
			'furnizorcategories' => array(self::HAS_MANY, 'Furnizorcategorie', 'categorieId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'categorieId' => 'Categorie',
			'parentId' => 'Parent',
			'nume' => 'Nume',
			'descriere' => 'Descriere',
			'metaTitlu' => 'Meta Titlu',
			'metaDescriere' => 'Meta Descriere',
			'titluImg' => 'Titlu Img',
			'altImg' => 'Alt Img',
			'img' => 'Img',
			'keywords' => 'Keywords',
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

		$criteria->compare('categorieId',$this->categorieId);
		$criteria->compare('parentId',$this->parentId);
		$criteria->compare('nume',$this->nume,true);
		$criteria->compare('descriere',$this->descriere,true);
		$criteria->compare('metaTitlu',$this->metaTitlu,true);
		$criteria->compare('metaDescriere',$this->metaDescriere,true);
		$criteria->compare('titluImg',$this->titluImg,true);
		$criteria->compare('altImg',$this->altImg,true);
		$criteria->compare('img',$this->img,true);
		$criteria->compare('keywords',$this->keywords,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static function fetchlist()
        {
            $categorii=self::model()->findAll('parentId is NULL');
            $list = array();
            if(!empty($categorii))
                foreach($categorii as $categorie)
                {
                    $list[$categorie->categorieId]=$categorie->nume;
                }
            return $list;
        }
        
}