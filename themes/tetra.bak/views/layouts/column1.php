<?php $this->beginContent('//layouts/main'); ?>
<?php

$jsText = "$('.row').addClass('pure-control-group');\n";
$jsText .= "$('.row .buttons').addClass('pure-button pure-button-primary');\n";
#$jsText .= "$('#headerModalDialog').dialog({ autoOpen: false });\n";
#$jsText .= "$('#openHeaderModal').click(function(){\$('#headerModalDialog').modal('toggle');});\n";
#$jsText .= "$('.dropdown-toggle').dropdown()\n";



Yii::app()->clientScript->registerScript('stackedForm',$jsText,CClientScript::POS_READY);?>

<?php
/*
$this->beginWidget('zii.widgets.jui.CJuiDialog',array(
    'id'=>'dialog-tools',
    'options'=>array(
        'title'=>'Egenskaper',
        'autoOpen'=>false,
        'show'=>array(
                'effect'=>'fade',
                'duration'=>500,
            ),
        'hide'=>array(
                'effect'=>'fade',
                'duration'=>500,
            ),            
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
*/
?>
<p class='autoCompleteField'>
<?php $this->widget('zii.widgets.jui.CJuiAutoComplete',array(
	'id'=>'name',
	'name'=>'name',
	'htmlOptions' => array('style'=>'padding: 0.5em; width: 100%; line-height: 1.5;', 'placeholder'=>'Sök patienter'), 
	'sourceUrl'=>array('AutoComplete/GetName'),
	'options'=>array(
		'select' => "js: function(event,ui) {
			var doc = '?r=accordion/display&pnr=' + ui.item.id;
			document.location.href = doc;
		}"
	),
));
?>
</p>

<?php echo $content; ?>
<?php $this->endContent(); ?>
