<?php
$operationDatesList =  CHtml::listData($operations,'id','operations_datum');
?>

<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aterhand-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<?php echo $form->labelEx($model,'personnummer'); ?>
	<span id='light'><?php print $befolkningsinfo->personnummer; ?></span>
	<?php echo $form->hiddenField($model,'personnummer'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,'operations_datum'); ?>
	<?php echo $form->dropDownList($model,'operations_datum',$operationDatesList);?>
	<?php echo $form->error($model, 'operations_datum'); ?>
</div>
<div class="row">
        <?php echo $form->labelEx($model,"besok_datum");?>
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
        <?php echo $form->error($model,'besok_datum'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,"veckor");?>
	<?php echo $form->textField($model,"veckor",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'veckor'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ind_prox");?>
	<?php echo $form->textField($model,"ind_prox",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'ind_prox'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ind_dist");?>
	<?php echo $form->textField($model,"ind_dist",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'ind_dist'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ind_mellan");?>
	<?php echo $form->textField($model,"ind_mellan",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'ind_mellan'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"elong_prox");?>
	<?php echo $form->textField($model,"elong_prox",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'elong_prox'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"elong_mellan");?>
	<?php echo $form->textField($model,"elong_mellan",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'elong_mellan'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"elong_dist");?>
	<?php echo $form->textField($model,"elong_dist",array('size'=>5,'maxlength'=>5)); ?>
	<?php echo $form->error($model,'elong_dist'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"soll");?>
	<?php echo $form->textField($model,"soll",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'soll'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"flex_pass");?>
	<?php echo $form->textField($model,"flex_pass",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'flex_pass'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"flex_aktiv");?>
	<?php echo $form->textField($model,"flex_aktiv",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'flex_aktiv'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_pass");?>
	<?php echo $form->textField($model,"ext_pass",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'ext_pass'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_aktiv");?>
	<?php echo $form->textField($model,"ext_aktiv",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'ext_aktiv'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"rotation_inat");?>
	<?php echo $form->textField($model,"rotation_inat",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'rotation_inat'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"rotation_utat");?>
	<?php echo $form->textField($model,"rotation_utat",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'rotation_utat'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"komplikation");?>
	<?php echo $form->textField($model,"komplikation",array('size'=>50,'maxlength'=>50)); ?>
	<?php echo $form->error($model,'komplikation'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_aktiv_avlast");?>
	<?php echo $form->textField($model,"ext_aktiv_avlast"); ?>
	<?php echo $form->error($model,'ext_aktiv_avlast'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"styrka_ext");?>
	<?php echo $form->textField($model,"styrka_ext_1",array('size'=>6,'maxlength'=>6,'placeholder'=>'1')); ?>
	<?php echo $form->error($model,'styrka_ext_1'); ?>
	<?php echo $form->textField($model,"styrka_ext_2",array('size'=>6,'maxlength'=>6,'placeholder'=>'2')); ?>
	<?php echo $form->error($model,'styrka_ext_2'); ?>
	<?php echo $form->textField($model,"styrka_ext_3", array('size'=>6,'maxlength'=>6,'placeholder'=>'3')); ?>
	<?php echo $form->error($model,'styrka_ext_3'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"styrka_flex");?>
	<?php echo $form->textField($model,"styrka_flex_1", array('placeholder'=>'1')); ?>
	<?php echo $form->error($model,'styrka_flex_1'); ?>
	<?php echo $form->textField($model,"styrka_flex_2", array('placeholder'=>'2')); ?>
	<?php echo $form->error($model,'styrka_flex_2'); ?>
	<?php echo $form->textField($model,"styrka_flex_3", array('placeholder'=>'3')); ?>
	<?php echo $form->error($model,'styrka_flex_3'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"kommentar");?>
	<?php echo $form->textField($model,"kommentar",array('size'=>65,'maxlength'=>200)); ?>
	<?php echo $form->error($model,'kommentar'); ?>
</div>
<div class="pure-controls">
<?php
if ($model->isNewRecord) {
	echo CHtml::submitButton('Create', array('class'=>'pure-button-orange pure-button'));
} else {
	echo CHtml::submitButton('Create', array('class'=>'pure-button-orange pure-button'));
}
?>

</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
