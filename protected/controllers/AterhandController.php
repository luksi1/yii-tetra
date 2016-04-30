<?php
class AterhandController extends Controller
{
	public $layout='//layouts/column1';
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Aterhand');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
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

	public function actionCreate()
	{
	    $model=new Aterhand;

		if(isset($_POST['Aterhand']))
                {
                        $model->attributes=$_POST['Aterhand'];
                        if($model->save())
                                $this->redirect(array('view','id'=>$model->personnummer));
                }

                $befolkningsinfo = Befolkningsinfo::model();
		$operations = Optillfallen::model();

                $befolkningsinfo = (isset($_GET['pnr']) ? Befolkningsinfo::model()->findByPk($_GET['pnr']) : null);
                $operations = (isset($_GET['pnr']) ? Optillfallen::model()->findAll(array('order'=>'operations_datum', 'condition'=>'personnummer=:pnr', 'params'=>array(':pnr'=>$_GET["pnr"]))) : null);

	    if(isset($_POST['ajax']) && $_POST['ajax']==='client-account-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }

	    if(isset($_POST['Aterhand']))
	    {
	        $model->attributes=$_POST['Aterhand'];
	        if($model->validate())
	        {
				$this->saveModel($model);
				$this->redirect(array('view','personnummer'=>$model->personnummer, 'operations_datum'=>$model->operations_datum, 'besok_datum'=>$model->besok_datum));
	        }
	    }
		$this->render('create',array('model'=>$model,'befolkningsinfo'=>$befolkningsinfo,'operations'=>$operations));

	} 
	
	public function actionDelete($personnummer, $operations_datum, $besok_datum)
	{
		if(Yii::app()->request->isPostRequest)
		{
			try
			{
				// we only allow deletion via POST request
				$this->loadModel($personnummer, $operations_datum, $besok_datum)->delete();
			}
			catch(Exception $e) 
			{
				$this->showError($e);
			}

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}
	
	public function actionUpdate($pnr, $operations_datum, $besok_datum)
	{
		$model=$this->loadModel($pnr, $operations_datum, $besok_datum);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

                $befolkningsinfo = (isset($_GET['pnr']) ? Befolkningsinfo::model()->findByPk($_GET['pnr']) : null);
                $operations = (isset($_GET['pnr']) ? Optillfallen::model()->findAll(array('order'=>'operations_datum', 'condition'=>'personnummer=:pnr', 'params'=>array(':pnr'=>$_GET["pnr"]))) : null);


		if(isset($_POST['Aterhand']))
		{
			$model->attributes=$_POST['Aterhand'];
			$this->saveModel($model);
			$this->redirect(array('view',
	                    'personnummer'=>$model->personnummer, 'operations_datum'=>$model->operations_datum, 'besok_datum'=>$model->besok_datum));
		}

		$this->render('update',array(
			'model'=>$model,'operations'=>$operations,'befolkningsinfo'=>$befolkningsinfo
		));
	}
	
	public function actionAdmin()
	{
		$model=new Aterhand('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Aterhand']))
			$model->attributes=$_GET['Aterhand'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	
	public function actionView($personnummer, $operations_datum, $besok_datum)
	{		
		$model=$this->loadModel($personnummer, $operations_datum, $besok_datum);
		$this->render('view',array('model'=>$model));
	}
	
	public function loadModel($personnummer, $operations_datum, $besok_datum)
	{
		$model=Aterhand::model()->findByPk(array('personnummer'=>$personnummer, 'operations_datum'=>$operations_datum, 'besok_datum'=>$besok_datum));
		if($model==null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	public function saveModel($model)
	{
		try
		{
			$model->save();
		}
		catch(Exception $e)
		{
			$this->showError($e);
		}		
	}

	function showError(Exception $e)
	{
		if($e->getCode()==23000)
			$message = "This operation is not permitted due to an existing foreign key reference.";
		else
			$message = "Invalid operation.";
		throw new CHttpException($e->getCode(), $message);
	}		
}
