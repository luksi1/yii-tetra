<?php $this->beginContent('//layouts/main'); ?>
<?php

$jsText = "$('.row').addClass('pure-control-group');\n";
$jsText .= "$('.row .buttons').addClass('pure-button pure-button-primary');\n";

Yii::app()->clientScript->registerScript('stackedForm',$jsText,CClientScript::POS_READY);

$jsText = "$.fn.textWidth = function(text,font) {\n"
    	. "if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);\n"
    	. "$.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));\n"
    	. "return $.fn.textWidth.fakeEl.width();\n"
	. "};\n"
	. "var headerWidth = $('.box-title').textWidth()+80;\n"
	. "$('.box-title').width(headerWidth);\n"
	. "$('.box-subtitle').width(headerWidth);\n";

Yii::app()->clientScript->registerScript('box-title',$jsText,CClientScript::POS_READY);

$jsText = '$(".hasDatepicker").datepicker({ dateFormat: "yy-mm-dd" });'
	. "\n"
	. '$(".hasDatepicker").datepicker("option", "dateFormat", "yy-mm-dd" );'
	. "\n";
Yii::app()->clientScript->registerScript('datePicker',$jsText,CClientScript::POS_READY);

?>

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
        'htmlOptions' => array('class'=>'orange-box', 'placeholder'=>'Sök efter patienter...'),
        'sourceUrl'=>array('AutoComplete/GetName'),
        'options'=>array(
                'select' => "js: function(event,ui) {
                        var doc = '?r=accordion/display&pnr=' + ui.item.id;
                        document.location.href = doc;
                }"
        ),
));
?>
<a class='addPatient' href="?r=befolkningsinfo/create">Lägg till en ny patient</a>
</p>

<div class="container">
<?php echo $content; ?>
<?php $this->endContent(); ?>
