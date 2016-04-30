<?php

class TableController extends Controller
{
	public function actionBuild($model)
	{
		$table = null;
		$table = "<table>";
		foreach($model as $key => $value)
		{
			$table .= "<tr><td>$key</td><td>$value</td></tr>";
		}
		return $table;
	}
}

?>
		
