<p><a class="box-title-extended" data-target=".modalData" data-toggle="modal" href="#"><?php print $befolkningsinfo->enamn . ", " . $befolkningsinfo->fnamn ?></a></p>

<div class="modal fade modalData" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><?php print $befolkningsinfo->enamn . ", " . $befolkningsinfo->fnamn ?></h4>
	</div>
	<div class='modal-body'>
	<a href="?r=muskelstatus/create&pnr=<?php print $_GET["pnr"];?>">Lägg in / uppdatera data om muskelstatus</a><br />
	<a href="?r=optillfallen/create&pnr=<?php print $_GET["pnr"];?>">Boka en operation</a><br />
	<a href="?r=aterhand/create&pnr=<?php print $_GET["pnr"];?>">Hand återbesök</a><br />
	<a href="?r=aterarm/create&pnr=<?php print $_GET["pnr"];?>">Arm återbesök</a><br />
	<a href="?r=preophand/create&pnr=<?php print $_GET["pnr"];?>">Preop hand</a><br />
	<a href="?r=preoparm/create&pnr=<?php print $_GET["pnr"];?>">Preop arm</a><br />
	</div>
    </div>
  </div>
</div>


<?php
$params = array();

// Push some values that are static on to $panels
$panels = array('Befolknings information' => array('model'=>$befolkningsinfo), "Muskelstatus"=>array('model'=>$muskelstatus,'hidden'=>array('personnummer')),'Patient Information'=>array('model'=>$patientinfo, 'hidden'=>array('personnummer')));

foreach ($optillfallen as $o)
{
	$criteria = new CDbCriteria;
	$criteria->condition='personnummer=:personnummer AND operations_datum=:operations_datum';
	$criteria->params = array(':personnummer'=> $o->personnummer, ':operations_datum'=> $o->operations_datum);

	foreach ($this->getPreopModels($criteria) as $preopModel)
	{

		if (count($preopModel))
		{
			foreach ($preopModel as $model)
			{
				$panels["$o->operations_datum - $model->optyp"] = array('model' => $model, 'hidden' => array('personnummer'));
				foreach ($this->getChildModel(get_class($model), $o->personnummer, $o->operations_datum) as $besok)
				{
					$panels["$besok->besok_datum"] = array('model' => $besok, 'hidden' => array('personnummer'), 'headerClass' => 'light');
				}
				
			}
		}
	}
}

$params['panels'] = $panels;

// Define some parameters for our widget.
$params['parameters'] = array('heightStyle'=>'content', 'collapsible'=>'true', 'active'=>'false');

// And send everything to our widget. 
$this->widget('Accordion', $params);

		
?>
