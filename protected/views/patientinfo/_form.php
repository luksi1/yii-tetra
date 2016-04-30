<?php
/* @var $this PatientinfoController */
/* @var $model Patientinfo */
/* @var $form CActiveForm */
?>

<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patientinfo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
                <?php echo $form->labelEx($model,'personnummer'); ?>
                <span id='light'><?php print $befolkningsinfo->personnummer; ?></span>
                <?php echo $form->hiddenField($model,'personnummer'); ?>
        </div>

	<div class="row">
		<?php echo $form->labelEx($model,'skadedatum'); ?>
		<?php echo $form->textField($model,'skadedatum'); ?>
		<?php echo $form->error($model,'skadedatum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'socialt'); ?>
		<?php echo $form->textField($model,'socialt',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'socialt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alder_skadan'); ?>
		<?php echo $form->textField($model,'alder_skadan'); ?>
		<?php echo $form->error($model,'alder_skadan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'forsta_und_dat'); ?>
		<?php echo $form->textField($model,'forsta_und_dat'); ?>
		<?php echo $form->error($model,'forsta_und_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'yrke_fore_sk'); ?>
		<?php echo $form->textField($model,'yrke_fore_sk',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'yrke_fore_sk'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'klass_yrke'); ?>
		<?php echo $form->textField($model,'klass_yrke',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'klass_yrke'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'klass_hoger'); ?>
		<?php echo $form->textField($model,'klass_hoger',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'klass_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'klass_vanster'); ?>
		<?php echo $form->textField($model,'klass_vanster',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'klass_vanster'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'traumatyp'); ?>
		<?php echo $form->textField($model,'traumatyp',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'traumatyp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skadeniva'); ?>
		<?php echo $form->textField($model,'skadeniva',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'skadeniva'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'muskler_hoger'); ?>
		<?php echo $form->textField($model,'muskler_hoger',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'muskler_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'muskler_vanster'); ?>
		<?php echo $form->textField($model,'muskler_vanster',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'muskler_vanster'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dom_hand_pre'); ?>
		<?php echo $form->textField($model,'dom_hand_pre',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dom_hand_pre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dom_hand_post'); ?>
		<?php echo $form->textField($model,'dom_hand_post',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'dom_hand_post'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avslutad'); ?>
		<?php echo $form->textField($model,'avslutad',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'avslutad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avslutad_dat'); ?>
		<?php echo $form->textField($model,'avslutad_dat'); ?>
		<?php echo $form->error($model,'avslutad_dat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'undersoknings_pl'); ?>
		<?php echo $form->textField($model,'undersoknings_pl',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'undersoknings_pl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'barn'); ?>
		<?php echo $form->textField($model,'barn',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'barn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'amdat'); ?>
		<?php echo $form->textField($model,'amdat'); ?>
		<?php echo $form->error($model,'amdat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rollstol'); ?>
		<?php echo $form->textField($model,'rollstol',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'rollstol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'annan_sjd'); ?>
		<?php echo $form->textField($model,'annan_sjd',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'annan_sjd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'planerat_op'); ?>
		<?php echo $form->textField($model,'planerat_op'); ?>
		<?php echo $form->error($model,'planerat_op'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'planerat_ab'); ?>
		<?php echo $form->textField($model,'planerat_ab'); ?>
		<?php echo $form->error($model,'planerat_ab'); ?>
	</div>

	<div class="pure-controls">
	<?php
	if ($model->isNewRecord) {
		echo CHtml::submitButton('Create', array('class'=>'pure-button-orange pure-button'));
	} else {
		echo CHtml::submitButton('Spara', array('class'=>'pure-button-orange pure-button'));
	}
	?>

	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->
