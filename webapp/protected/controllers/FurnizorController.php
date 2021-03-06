<?php

class FurnizorController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','viewOrders','viewOrder','viewOffer','viewOffers','captcha','createOffer'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Furnizor;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Furnizor']))
		{
			$model->attributes=$_POST['Furnizor'];
			if($model->save()){
                            $model->insertIntoFurnizorCategorie($_POST['Categorie'],$model->furnizorId);                     
                            $model->insertIntoFurnizorClient($model->email,$model->parola,'f');
                            $this->redirect(array('view','id'=>$model->furnizorId));
                        }
                }

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Furnizor']))
		{
			$model->attributes=$_POST['Furnizor'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->furnizorId));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Furnizor');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Furnizor('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Furnizor']))
			$model->attributes=$_GET['Furnizor'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Furnizor::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='furnizor-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
        
        public function actionviewOrders($id)
	{
            $model=$this->loadModel($id);
            $dataProvider = $model->returnComenzi($id);
		$this->render('viewOrders',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionviewOrder($id)
	{
            $model = Comanda::model()->findByPk($id);
            $this->render('viewOrder',array(
			'model'=>$model,
		));
	}
        
        public function actionviewOffers($id)
	{
            $model=$this->loadModel($id);
            $dataProvider = $model->returnOferte($id);
		$this->render('viewOffers',array(
			'dataProvider'=>$dataProvider,
		));
	}
        
        public function actionviewOffer($id)
	{
            $model = Oferta::model()->findByPk($id);
            $this->render('viewOffer',array(
			'model'=>$model,
		));
	}
        
        public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}
        
        public function actioncreateOffer($id){
            
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
            // validare daca mai exista comanda checked
            // de facu mesajul daca nu mai e comanda valabila
            
                $model = new Oferta;
                $comanda = 1;
                $comanda = Comanda::model()->find('comandaId="'.$id.'"');    
                 if($comanda != '1'){
                    $model->comandaId = $id;
                    $model->furnizorId = Furnizor::model()->returnFurnizorIdLogat();
                    $model->nume = $comanda->nume;
                    $model->data = date('Y-m-d h:i:s');
                    if(isset($_POST['Oferta'])){			

                         $model = Oferta::model();
                         $model->attributes=$_POST['Oferta'];
                         if($model->save()){
                            Furnizor::model()->insertIntoFurnizorComandaOferta($id,$model->furnizorId,$model->ofertaId);
                            $this->redirect(array('view','id'=>$model->furnizorId));
                         }

                    }
		$this->render('createOffer',array(
			'model'=>$model,
		));
             }
                        else {
                            echo '<h1>Comanda nu mai este valabila</h1>';
                        }
	}
}
