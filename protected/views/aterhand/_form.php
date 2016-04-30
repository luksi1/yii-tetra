
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
	<?php echo $form->labelEx($model,"grepp");?>
	<?php echo $form->textField($model,"grepp",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'grepp'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"styrka_helhand");?>
	<?php echo $form->textField($model,"styrka_helhand",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'styrka_helhand'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"stryka_nyckelgrepp");?>
	<?php echo $form->textField($model,"stryka_nyckelgrepp",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'stryka_nyckelgrepp'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"akt_knyt_diastas");?>
	<?php echo $form->textField($model,"akt_knyt_diastas_1",array('size'=>6,'maxlength'=>6, 'placeholder'=>'1')); ?>
	<?php echo $form->error($model,'akt_knyt_diastas_1'); ?>
	<?php echo $form->textField($model,"akt_knyt_diastas_2",array('size'=>6,'maxlength'=>6, 'placeholder'=>'2')); ?>
	<?php echo $form->error($model,'akt_knyt_diastas_2'); ?>
	<?php echo $form->textField($model,"akt_knyt_diastas_3",array('size'=>6,'maxlength'=>6, 'placeholder'=>'3')); ?>
	<?php echo $form->error($model,'akt_knyt_diastas_3'); ?>
	<?php echo $form->textField($model,"akt_knyt_diastas_4",array('size'=>6,'maxlength'=>6, 'placeholder'=>'4')); ?>
	<?php echo $form->error($model,'akt_knyt_diastas_4'); ?>
	<?php echo $form->textField($model,"akt_knyt_diastas_5",array('size'=>6,'maxlength'=>6,'placeholder'=>'5')); ?>
	<?php echo $form->error($model,'akt_knyt_diastas_5'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"flex_pass_handled");?>
	<?php echo $form->textField($model,"flex_pass_handled"); ?>
	<?php echo $form->error($model,'flex_pass_handled'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_pass_handled");?>
	<?php echo $form->textField($model,"ext_pass_handled"); ?>
	<?php echo $form->error($model,'ext_pass_handled'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"pronation");?>
	<?php echo $form->textField($model,"pronation"); ?>
	<?php echo $form->error($model,'pronation'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"supination");?>
	<?php echo $form->textField($model,"supination"); ?>
	<?php echo $form->error($model,'supination'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"kommentar");?>
	<?php echo $form->textField($model,"kommentar",array('size'=>65,'maxlength'=>250)); ?>
	<?php echo $form->error($model,'kommentar'); ?>
</div>
<div class="row">
</div>
<div class="row">
	<?php echo $form->labelEx($model,"soll_icke_op_sida");?>
	<?php echo $form->textField($model,"soll_icke_op_sida"); ?>
	<?php echo $form->error($model,'soll_icke_op_sida'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"opkod");?>
	<?php echo $form->textField($model,"opkod_1", array('placeholder'=>'1')); ?>
	<?php echo $form->error($model,'opkod_1'); ?>
	<?php echo $form->textField($model,"opkod_2", array('placeholder'=>'2')); ?>
	<?php echo $form->error($model,'opkod_2'); ?>
	<?php echo $form->textField($model,"opkod_3", array('placeholder'=>'3')); ?>
	<?php echo $form->error($model,'opkod_3'); ?>
	<?php echo $form->textField($model,"opkod_4", array('placeholder'=>'4')); ?>
	<?php echo $form->error($model,'opkod_4'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_pas_arm");?>
	<?php echo $form->textField($model,"ext_pas_arm"); ?>
	<?php echo $form->error($model,'ext_pas_arm'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_akt_arm");?>
	<?php echo $form->textField($model,"ext_akt_arm"); ?>
	<?php echo $form->error($model,'ext_akt_arm'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"ext_avl_arm");?>
	<?php echo $form->textField($model,"ext_avl_arm"); ?>
	<?php echo $form->error($model,'ext_avl_arm'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"styrka_ext_arm");?>
	<?php echo $form->textField($model,"styrka_ext_arm"); ?>
	<?php echo $form->error($model,'styrka_ext_arm'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"styrka_flex_arm");?>
	<?php echo $form->textField($model,"styrka_flex_arm"); ?>
	<?php echo $form->error($model,'styrka_flex_arm'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"flexion_mcp1");?>
	<?php echo $form->textField($model,"flexion_mcp1"); ?>
	<?php echo $form->error($model,'flexion_mcp1'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"extension_ip");?>
	<?php echo $form->textField($model,"extension_ip"); ?>
	<?php echo $form->error($model,'extension_ip'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"flexion_ip");?>
	<?php echo $form->textField($model,"flexion_ip"); ?>
	<?php echo $form->error($model,'flexion_ip'); ?>
</div>
<div class="pure-controls">
<?php
if ($model->isNewRecord) {
	echo CHtml::submitButton('Skapa', array('class'=>'pure-button-orange pure-button'));
} else {
	echo CHtml::submitButton('Uppdatera', array('class'=>'pure-button-orange pure-button'));
}
?>

</div>
<?php $this->endWidget(); ?>

</div><!-- form -->
