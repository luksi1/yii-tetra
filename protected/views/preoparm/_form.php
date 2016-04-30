<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'preoparm-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<div class="row">
        <?php echo $form->labelEx($model,'personnummer'); ?>
        <span id='light'><?php print $befolkningsinfo->personnummer; ?></span>
        <?php echo $form->hiddenField($model,'personnummer'); ?>
</div>
<div class="row">
<div class="row">
        <?php
        $operationDatesList =  CHtml::listData($operations,'id','operations_datum');
        echo $form->labelEx($model,'operations_datum');
        echo $form->dropDownList($model,'operations_datum',$operationDatesList);
        echo $form->error($model, 'operations_datum');
        ?>
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
	<?php echo $form->labelEx($model,"styrka");?>
	<?php echo $form->textField($model,"styrka",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'styrka'); ?>
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
	<?php echo $form->labelEx($model,"operator");?>
	<?php echo $form->textField($model,"operator",array('size'=>3,'maxlength'=>3)); ?>
	<?php echo $form->error($model,'operator'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"optyp");?>
	<?php echo $form->textField($model,"optyp",array('size'=>60,'maxlength'=>60)); ?>
	<?php echo $form->error($model,'optyp'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"soll_ejopsida");?>
	<?php echo $form->textField($model,"soll_ejopsida",array('size'=>6,'maxlength'=>6)); ?>
	<?php echo $form->error($model,'soll_ejopsida'); ?>
</div>
<div class="row">
	<?php echo $form->labelEx($model,"extensionsdefekt");?>
	<?php echo $form->textField($model,"extensionsdefekt"); ?>
	<?php echo $form->error($model,'extensionsdefekt'); ?>
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
