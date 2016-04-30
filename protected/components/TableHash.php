<?php

class TableHash extends CWidget
{
	public $model;
	public $hidden;
	public $headerClass;
	public $textClass;

	public function run()
	{
		$model = $this->model;
		$hidden = ($this->hidden) ? $this->hidden : null;
		Yii::trace(CVarDumper::dumpAsString($model),'vardump');
		$modelName = get_class($model);
		foreach($model as $key => $value)
		{

		$value = preg_replace('/^\s+/', '',$value);
		if ($value == null) {
			continue;
		} elseif ($value == "") {
			continue;
		}

		if (isset($hidden)) {
			if (in_array($key, $hidden)) {
				continue;
			}
		}
		print "<dl>";
		print "<dt>" . $modelName::model()->getAttributeLabel($key) . ": </dt>";
		print "<dd>$value</dd>";
		print "</dl>";
		}

	}
}
	
