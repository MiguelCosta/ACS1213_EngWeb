<?php

class FotografiaController extends Controller
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
				'actions'=>array('create','update','createInAlbum'),
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
		//http://www.yiiframework.com/wiki/349/how-to-upload-image-photo-and-path-entry-in-database-with-update-functionality/
		
		$model=new Fotografia;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Fotografia']))
		{
			$rnd = rand(0,9999);  // generate random number between 0-9999
			$model->attributes=$_POST['Fotografia'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'path');
			$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
			$model->path = $fileName;
			
			if($model->save()){
				
				$fullpath = Yii::app()->params['fotospath'].$fileName;
				Yii::log("FULL PATH: $fullpath", CLogger::LEVEL_INFO);
				$uploadedFile->saveAs($fullpath);  // image will uplode to rootDirectory/images/fotos/
				
				//$this->redirect(array('admin'));
				$this->redirect(array('view','id'=>$model->id));
				
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

		if(isset($_POST['Fotografia']))
		{
			$_POST['Fotografia']['path'] = $model->path;
			
			$model->attributes=$_POST['Fotografia'];
			
			$uploadedFile=CUploadedFile::getInstance($model,'path');
			
			if($model->save()){
				

				if(!empty($uploadedFile))  // check if uploaded file is set or not
				{
					$uploadedFile->saveAs(Yii::app()->params['fotospath'].$model->path);
				}
				$this->redirect(array('view','id'=>$model->id));
				//$this->redirect(array('admin'));
				
			}
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
		$dataProvider=new CActiveDataProvider('Fotografia');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Fotografia('search');
		$model->unsetAttributes();  // clear any default values
		
		$albumID = $_GET['AlbumID'];
		
		if(isset($_GET['Fotografia']))
			$model->attributes=$_GET['Fotografia'];
		
		$this->render('admin',array(
			'model'=>$model,
				'albumID'=>$albumID
		));
	}

	
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreateInAlbum()
	{
		//http://www.yiiframework.com/wiki/349/how-to-upload-image-photo-and-path-entry-in-database-with-update-functionality/
	
		$model=new Fotografia;
		$albumID = 1;
		
		if(isset($_GET['AlbumID']))
		{
			$albumID = $_GET['AlbumID'];
		}
		
		// Uncomment the following line if AJAX validation is needed
		//$this->performAjaxValidation($model);
	
		if(isset($_POST['Fotografia']))
		{
		
			$rnd = rand(0,9999);  // generate random number between 0-9999
			$model->attributes=$_POST['Fotografia'];
			$model->album_id = $albumID;

			//Yii::log("AlbumID: $albumID", CLogger::LEVEL_INFO);
			
			$uploadedFile=CUploadedFile::getInstance($model,'path');
			$fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
			$model->path = $fileName;
				
			if($model->save()){
	
				$fullpath = Yii::app()->params['fotospath'].$fileName;
				//Yii::log("FULL PATH: $fullpath", CLogger::LEVEL_INFO);
				$uploadedFile->saveAs($fullpath);  // image will uplode to rootDirectory/images/fotos/
	
				//$this->redirect(array('admin'));
				$this->redirect(array('Album/view','id'=>$model->album_id));
	
			}
		}
	
		$this->render('createInAlbum',array(
				'model'=>$model,
				'albumID'=> $albumID,
		));
		
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Fotografia the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Fotografia::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Fotografia $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='fotografia-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
