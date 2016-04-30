<?php
/* @var $this PatientinfoController */
/* @var $model Patientinfo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'personnummer'); ?>
		<?php echo $form->textField($model,'personnummer',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skadedatum'); ?>
		<?php echo $form->textField($model,'skadedatum'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'socialt'); ?>
		<?php echo $form->textField($model,'socialt',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'alder_skadan'); ?>
		<?php echo $form->textField($model,'alder_skadan'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'forsta_und_dat'); ?>
		<?php echo $form->textField($model,'forsta_und_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'yrke_fore_sk'); ?>
		<?php echo $form->textField($model,'yrke_fore_sk',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klass_yrke'); ?>
		<?php echo $form->textField($model,'klass_yrke',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klass_hoger'); ?>
		<?php echo $form->textField($model,'klass_hoger',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'klass_vanster'); ?>
		<?php echo $form->textField($model,'klass_vanster',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'traumatyp'); ?>
		<?php echo $form->textField($model,'traumatyp',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skadeniva'); ?>
		<?php echo $form->textField($model,'skadeniva',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'muskler_hoger'); ?>
		<?php echo $form->textField($model,'muskler_hoger',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'muskler_vanster'); ?>
		<?php echo $form->textField($model,'muskler_vanster',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dom_hand_pre'); ?>
		<?php echo $form->textField($model,'dom_hand_pre',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dom_hand_post'); ?>
		<?php echo $form->textField($model,'dom_hand_post',array('size'=>2,'maxlength'=>2)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avslutad'); ?>
		<?php echo $form->textField($model,'avslutad',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avslutad_dat'); ?>
		<?php echo $form->textField($model,'avslutad_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'undersoknings_pl'); ?>
		<?php echo $form->textField($model,'undersoknings_pl',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'barn'); ?>
		<?php echo $form->textField($model,'barn',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'amdat'); ?>
		<?php echo $form->textField($model,'amdat'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rollstol'); ?>
		<?php echo $form->textField($model,'rollstol',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'annan_sjd'); ?>
		<?php echo $form->textField($model,'annan_sjd',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planerat_op'); ?>
		<?php echo $form->textField($model,'planerat_op'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'planerat_ab'); ?>
		<?php echo $form->textField($model,'planerat_ab'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->