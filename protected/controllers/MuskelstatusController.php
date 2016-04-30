<?php

class MuskelstatusController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column1';

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
				'actions'=>array('create','update'),
				'users'=>array('*'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('*'),
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
	/*
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	*/
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Muskelstatus;

		$pnr = $_GET['pnr'];

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Muskelstatus']))
		{
			$model->attributes=$_POST['Muskelstatus'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->personnummer));
		}

		$befolkningsinfo = Befolkningsinfo::model();

		$befolkningsinfo = (isset($_GET['pnr']) ? Befolkningsinfo::model()->findByPk($_GET['pnr']) : null);

		$checkModel = $model->findByPk($_GET['pnr']);

		if (!empty($checkModel->personnummer)) {
			$this->redirect("?r=muskelstatus/update&pnr=$pnr");
		}
	

		$this->render('create',array(
			'model'=>$model, 'befolkningsinfo'=>$befolkningsinfo,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate()
	{
		if (isset($_GET['pnr']))
			$id = $_GET['pnr'];
		else
			throw new CHttpException(404,'You need to have a person to update.');

                $befolkningsinfo = (isset($_GET['pnr']) ? Befolkningsinfo::model()->findByPk($_GET['pnr']) : null);

		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Muskelstatus']))
		{
			$model->attributes=$_POST['Muskelstatus'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->personnummer));
		}

		$this->render('update',array(
			'model'=>$model,'befolkningsinfo'=>$befolkningsinfo,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
                if (isset($_GET['pnr']))
                        $id = $_GET['pnr'];
                else
                        throw new CHttpException(404,'You need to have a person to update.');


                //$befolkningsinfo = (isset($_GET['pnr']) ? Befolkningsinfo::model()->findByPk($_GET['pnr']) : null);

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
		$dataProvider=new CActiveDataProvider('Muskelstatus');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Muskelstatus('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Muskelstatus']))
			$model->attributes=$_GET['Muskelstatus'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Muskelstatus the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Muskelstatus::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Muskelstatus $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='muskelstatus-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
