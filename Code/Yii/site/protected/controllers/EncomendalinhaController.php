<?php

class EncomendalinhaController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','createInEncomenda','admin','delete'),
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
		$model=new Encomendalinha;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Encomendalinha']))
		{
			$model->attributes=$_POST['Encomendalinha'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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

		if(isset($_POST['Encomendalinha']))
		{
			$model->attributes=$_POST['Encomendalinha'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Encomendalinha');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Encomendalinha('search');
		$model->unsetAttributes();  // clear any default values
		
		$encomendaID = $_GET['EncomendaID'];
		
		if(isset($_GET['Encomendalinha']))
			$model->attributes=$_GET['Encomendalinha'];

		$this->render('admin',array(
			'model'=>$model,
				'encomendaID'=>$encomendaID
		));
	}

	public function actionCreateInEncomenda()
	{
			$model=new Encomendalinha;
			$encomendaID = 1;
		
			if(isset($_GET['EncomendaID']))
			{
				$encomendaID = $_GET['EncomendaID'];
			}
	
			// Uncomment the following line if AJAX validation is needed
			//$this->performAjaxValidation($model);
		
			if(isset($_POST['Encomendalinha']))
			{
		
				$model->attributes=$_POST['Encomendalinha'];
				$model->encomenda_id = $encomendaID;
		
				if($model->save()){
					//$this->redirect(array('admin'));
					$this->redirect(array('Encomenda/view','id'=>$model->encomenda_id));
				}
			}
		
			$this->render('createInEncomenda',array(
					'model'=>$model,
					'encomendaID'=> $encomendaID,
			));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Encomendalinha the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Encomendalinha::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Encomendalinha $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='encomendalinha-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
