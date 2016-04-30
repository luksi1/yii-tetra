<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<?php
$users = Users::model()->findAll();
$userList =  CHtml::listData($users,'id','username');
?>

<div class="box-title">Lägg till en användare</div>
<br />
<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,''); ?>
		<?php echo $form->textField($model,'username',array('size'=>10,'maxlength'=>10, 'placeholder'=>'VGR ID')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

<div class="pure-controls">
<?php
if ($model->isNewRecord) {
        echo CHtml::submitButton('Skapa användare', array('class'=>'pure-button-orange pure-button'));
}
?>

</div>


<?php $this->endWidget(); ?>

</div><!-- form -->

<hr />
<p><div class="box-title">Radera en användare</div></p>


<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'action' => Yii::app()->createUrl("users/delete"),
)); ?>

	<?php echo $form->errorSummary($model); ?>

<div class="row">
        <?php echo $form->labelEx($model,''); ?>
        <?php echo $form->dropDownList($model,'id',$userList, array('empty'=>"Välj en användare"));?>
        <?php echo $form->error($model, 'username'); ?>
</div>

<div class="pure-controls">
<?php
if ($model->isNewRecord) {
        echo CHtml::submitButton('Radera användare', array('class'=>'pure-button-orange pure-button'));
}
?>

</div>


<?php $this->endWidget(); ?>

</div><!-- form -->


