<?php $this->beginContent('//layouts/login_main'); ?>
<?php

$jsText = "$('.row').addClass('pure-control-group');\n";
$jsText .= "$('.row .buttons').addClass('pure-button pure-button-primary');\n";

Yii::app()->clientScript->registerScript('stackedForm',$jsText,CClientScript::POS_READY);

$jsText = "$.fn.textWidth = function(text,font) {\n"
    	. "if (!$.fn.textWidth.fakeEl) $.fn.textWidth.fakeEl = $('<span>').hide().appendTo(document.body);\n"
    	. "$.fn.textWidth.fakeEl.text(text || this.val() || this.text()).css('font', font || this.css('font'));\n"
    	. "return $.fn.textWidth.fakeEl.width();\n"
	. "};\n"
	. "var headerWidth = $('.box-title').textWidth();\n"
	. "var headerWidthExtended = $('.box-title-extended').textWidth()+80;\n"
	. "$('.box-title').width(headerWidth);\n"
	. "$('.box-title-extended').width(headerWidthExtended);\n";

Yii::app()->clientScript->registerScript('box-title',$jsText,CClientScript::POS_READY);

$jsText = '$(".hasDatepicker").datepicker({ dateFormat: "yy-mm-dd" });'
	. "\n"
	. '$(".hasDatepicker").datepicker("option", "dateFormat", "yy-mm-dd" );'
	. "\n";
Yii::app()->clientScript->registerScript('datePicker',$jsText,CClientScript::POS_READY);

?>

<div class="container">
<?php echo $content; ?>
<?php $this->endContent(); ?>
