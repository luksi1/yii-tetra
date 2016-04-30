<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'optillfallen-form',
	'enableAjaxValidation'=>false,
)); ?>


<?php echo $form->errorSummary($model); ?>

<div class="row">
        <?php echo $form->labelEx($model,'personnummer'); ?>
        <span id='light'><?php print $befolkningsinfo->personnummer; ?></span>
        <?php echo $form->hiddenField($model,'personnummer'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"operations_datum");?>
<?php
	$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'publishDate',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
    ),
    'htmlOptions'=>array(
    ),
));
?>
	<?php echo $form->error($model,'operations_datum'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"operations_text");?>
	<?php echo $form->textField($model,"operations_text",array('size'=>65,'maxlength'=>200)); ?>
	<?php echo $form->error($model,'operations_text'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"sida");?>
	<?php echo $form->textField($model,"sida",array('size'=>2,'maxlength'=>2)); ?>
	<?php echo $form->error($model,'sida'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"id");?>
	<?php echo $form->textField($model,"id"); ?>
	<?php echo $form->error($model,'id'); ?>
</div>
<div class="pure-controls">
<?php
if ($model->isNewRecord) {
	echo CHtml::submitButton('Skapa', array('class'=>'pure-button-orange pure-button'));
} else {
	echo CHtml::submitButton('Skapa', array('class'=>'pure-button-orange pure-button'));
}
?>

</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
