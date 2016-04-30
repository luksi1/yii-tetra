<?php

class AccordionController extends Controller
{
        public $layout='//layouts/column1';

	public function actionIndex()
	{
		$this->render('view');
	}

	public function actionDisplay()
	{

		if (isset($_GET['pnr'])) { 
			$pnr = $_GET['pnr']; 
		} else  {
			throw new CHttpException(404, "The requested page cannot be found");
		}

		$optillfallen = Optillfallen::model()->findAll('personnummer=:pnr', array(':pnr'=>$pnr));

		/*
		
		foreach ($optillfallen as $o) {

			$criteria = new CDbCriteria;
			$criteria->condition='personnummer=:personnummer AND operations_datum=:operations_datum';
			$criteria->params = array(':personnummer'=> $o->personnummer, ':operations_datum'=> $o->operations_datum);

			$aterarm = Aterarm::model()->findAll($criteria);
			$aterhand = Aterhand::model()->findAll($criteria);
			$preophand = Preophand::model()->find($criteria);
			$preoparm = Preoparm::model()->find($criteria);

			$operations["$o->operations_datum"] = array("aterarm"=>$aterarm,"aterhand"=>$aterhand, "preoparm"=>$preoparm, "preophand" => $preophand); 
		} 

		$information = array(
			'befolkningsinfo' => Befolkningsinfo::model()->findByPk($pnr),
                        'muskelstatus' => Muskelstatus::model()->findByPk($pnr),
                        'patientinfo' => Patientinfo::model()->findByPk($pnr),
			'operations' => $operations,
		);
		*/

		$befolkningsinfo = Befolkningsinfo::model()->findByPk($pnr);
		$muskelstatus = Muskelstatus::model()->findByPk($pnr);
		$patientinfo = Patientinfo::model()->findByPk($pnr);



		$this->render('index',array('optillfallen'=>$optillfallen, 'befolkningsinfo' => $befolkningsinfo, 'muskelstatus' => $muskelstatus, 'patientinfo' => $patientinfo));
				
	}


	public function getPreopModels($criteria)
	 {

		$models = array();
		$preoparm = Preoparm::model()->findAll($criteria);
		array_push($models, $preoparm);
		$preophand = Preophand::model()->findAll($criteria);
		array_push($models, $preophand);
	
		return $models;	

	}

	// Återhand and Återarm are child models to Preophand and Preopar
	public function getChildModel($parentName, $personnummer, $operationsDatum)
	{
		$parent["Preoparm"] = "Aterarm";
		$parent["Preophand"] = "Aterhand";

	        $criteria = new CDbCriteria;
		$criteria->condition='personnummer=:personnummer AND operations_datum=:operations_datum';
		$criteria->params = array(':personnummer'=> $personnummer, ':operations_datum'=> $operationsDatum);

		
		$model = $parent["$parentName"]::model()->findAll($criteria);


		return $model;
	
	}
	
}
	?>	
