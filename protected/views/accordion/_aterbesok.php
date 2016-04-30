<?php                        
	foreach ($aterhand as $besok) {
		$panels[$besok->besok_datum] = array('model' => $besok, 'hidden' => array('personnummer'), 'headerClass' => 'light');
	}
?>

