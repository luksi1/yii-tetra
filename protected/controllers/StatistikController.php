<?php

class StatistikController extends Controller
{
        public $layout='//layouts/column1';

	public function actionDisplay()
	{
		$oCount = new CDbCriteria();
		$oCount->select="personnummer";
		$count = Befolkningsinfo::model()->findAll($oCount);
		$oWomen = new CDbCriteria();
		$oWomen->select="kon";
		$oWomen->condition='kon=:women';
		$oWomen->params=array(':women'=>'K');
		$women = Befolkningsinfo::model()->findAll($oWomen);
		$oMen = new CDbCriteria();
		$oMen->select="kon";
		$oMen->condition='kon=:men';
		$oMen->params=array(':men'=>'M');
		$men = Befolkningsinfo::model()->findAll($oMen);
		
		$this->render('view', array("count"=>$count, "women"=>$women, "men" => $men));

	}
}
?>	
