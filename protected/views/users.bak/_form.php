Lägg till en nya användare
<hr />
<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

<?php echo $form->errorSummary($model); ?>

<?php var_dump($model); ?>

<div class="row">
        <?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,"username",array('size'=>10,'maxlength'=>10)); ?>
	<?php echo $form->error($model,'username'); ?>
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


<hr />
