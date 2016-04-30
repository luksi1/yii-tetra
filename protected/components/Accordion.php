<?php

class Accordion extends CWidget
{

	public $model;
	public $parameters;
	public $cssClass;
	public $panels;

	public function init()
	{
		$parameters = (isset($this->parameters)) ? $this->parameters : '';
		$cssClass = (isset($this->cssClass)) ? $this->cssClass : '#accordion';

		# Set attributes
		if ($parameters != '') {
			$jsText = array();
			foreach ($parameters as $key => $value)
			{
				array_push($jsText, "$key: '$value'");
			}
			$parametersImploded = implode(",\n", $jsText);
		} else {
			$parametersImploded = '';
		}

		$jsText = '$("' . $cssClass . '").accordion({' . $parametersImploded . '});' . "\n";

		Yii::app()->clientScript->registerScript('accordion',$jsText,CClientScript::POS_READY);

	}

	public function run()
	{
		$cssClass = (isset($this->cssClass)) ? $this->cssClass : 'accordion';
		
		# Strip pound sign
		$cssClass=ltrim($cssClass, '#');

		if (isset($this->panels))
		{
			$panels = $this->panels;
		} else {
			throw CHttpException(404, 'Variable $panels is not defined');
		}

		echo "<div id='$cssClass'>";

		foreach ($panels as $title => $text)
		{
			if (is_null($text['model'])) {
				continue;
			}
			$headerClass = (isset($text['headerClass'])) ? $text['headerClass'] : '';
			echo "<h3><div id='$headerClass'>$title</div></h3>";
			echo "<div><p>";
			if (is_array($text))
			{
				$options = array();
				foreach($text as $key => $value) {
					$options[$key] = $value;
				}
				$this->widget('TableHash',$options);
				$modelName = get_class($text["model"]);
				$model = $text["model"];
				echo "<hr />";
	
				/* Array of models to check */
				$modelArray = array('Befolkningsinfo','Muskelstatus','Patientinfo'); 
				if (in_array($modelName, $modelArray)) 
					echo '<a class="pure-button-orange pure-button" href=' . Yii::app()->createUrl("$modelName/update", array("pnr"=>$model->personnummer)) . '>Uppdatera</a>';
			
				/* Rewrite array. Change models */
				$modelArray = array('Preophand','Preoparm');
				if (in_array($modelName, $modelArray)) 
					echo '<a class="pure-button-orange pure-button" href=' . Yii::app()->createUrl("$modelName/update", array("pnr"=>$model->personnummer, "operations_datum"=>$model->operations_datum)) . '>Uppdatera</a>';
				
				/* Rewrite array again. */
				$modelArray = array('Aterhand','Aterarm');
				if (in_array($modelName, $modelArray)) 
					echo '<a class="pure-button-orange pure-button" href=' . Yii::app()->createUrl("$modelName/update", array("pnr"=>$model->personnummer, "operations_datum"=>$model->operations_datum,"besok_datum"=>$model->besok_datum)) . '>Uppdatera</a>';

					
				
				
			} else {
				echo $text;
			}
			echo "</p></div>";
		}
		echo "</div>";

	}
}
