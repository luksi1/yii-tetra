<?php
/* @var $this MuskelstatusController */
/* @var $model Muskelstatus */
/* @var $form CActiveForm */
/* @var $befolkningsinfo Befolkningsinfo */
?>

<div class="form pure-form pure-form-aligned">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'muskelstatus-form',
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
		<?php echo $form->labelEx($model,'trapezius'); ?>
		<?php echo $form->textField($model,'trapezius_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'trapezius_vanster'); ?>
		<?php echo $form->textField($model,'trapezius_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'trapezius_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latissimus'); ?>
		<?php echo $form->textField($model,'latissimus_vanster',array('size'=>5,'maxlength'=>5, 'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'latissimus_vanster'); ?>
		<?php echo $form->textField($model,'latissimus_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'latissimus_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_dorsalis'); ?>
		<?php echo $form->textField($model,'del_dorsalis_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'del_dorsalis_hoger'); ?>
		<?php echo $form->textField($model,'del_dorsalis_vanst',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'del_dorsalis_vanst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_ventrali'); ?>
		<?php echo $form->textField($model,'del_ventrali_vanst',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'del_ventrali_vanst'); ?>
		<?php echo $form->textField($model,'del_ventrali_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'del_ventrali_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'del_intermed'); ?>
		<?php echo $form->textField($model,'del_intermed_vanst',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'del_intermed_vanst'); ?>
		<?php echo $form->textField($model,'del_intermed_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'del_intermed_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serratus'); ?>
		<?php echo $form->textField($model,'serratus_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'serratus_vanster'); ?>
		<?php echo $form->textField($model,'serratus_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'serratus_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'utatrotation'); ?>
		<?php echo $form->textField($model,'utatrotation_vanst',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'utatrotation_vanst'); ?>
		<?php echo $form->textField($model,'utatrotation_hog',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'utatrotation_hog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inatrotation'); ?>
		<?php echo $form->textField($model,'inatroation_vanste',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'inatroation_vanste'); ?>
		<?php echo $form->textField($model,'inatrotation_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'inatrotation_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pec_clav'); ?>
		<?php echo $form->textField($model,'pec_clav_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'pec_clav_vanster'); ?>
		<?php echo $form->textField($model,'pec_clav_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'pec_clav_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pec_sterno'); ?>
		<?php echo $form->textField($model,'pec_sterno_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'pec_sterno_vanster'); ?>
		<?php echo $form->textField($model,'pec_sterno_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'pec_sterno_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'triceps'); ?>
		<?php echo $form->error($model,'triceps_vanster'); ?>
		<?php echo $form->textField($model,'triceps_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->textField($model,'triceps_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'triceps_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'biceps_brach'); ?>
		<?php echo $form->textField($model,'biceps_brach_vanst',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'biceps_brach_vanst'); ?>
		<?php echo $form->textField($model,'biceps_brach_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'biceps_brach_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brachiorad'); ?>
		<?php echo $form->textField($model,'brachiorad_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'brachiorad_vanster'); ?>
		<?php echo $form->textField($model,'brachiorad_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'brachiorad_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ecrb'); ?>
		<?php echo $form->textField($model,'ecrb_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'ecrb_vanster'); ?>
		<?php echo $form->textField($model,'ecrb_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'ecrb_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pronator'); ?>
		<?php echo $form->textField($model,'pronator_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'pronator_vanster'); ?>
		<?php echo $form->textField($model,'pronator_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'pronator_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supinator'); ?>
		<?php echo $form->textField($model,'supinator_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'supinator_vanster'); ?>
		<?php echo $form->textField($model,'supinator_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'supinator_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fcr'); ?>
		<?php echo $form->textField($model,'fcr_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'fcr_vanster'); ?>
		<?php echo $form->textField($model,'fcr_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'fcr_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edq'); ?>
		<?php echo $form->textField($model,'edq_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'edq_vanster'); ?>
		<?php echo $form->textField($model,'edq_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'edq_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fdp'); ?>
		<?php echo $form->textField($model,'fdp_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'fdp_vanster'); ?>
		<?php echo $form->textField($model,'fdp_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'fdp_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'epl'); ?>
		<?php echo $form->textField($model,'epl_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'epl_vanster'); ?>
		<?php echo $form->textField($model,'epl_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'epl_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apl'); ?>
		<?php echo $form->textField($model,'apl_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'apl_vanster'); ?>
		<?php echo $form->textField($model,'apl_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'apl_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fpl'); ?>
		<?php echo $form->textField($model,'fpl_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'fpl_vanster'); ?>
		<?php echo $form->textField($model,'fpl_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'fpl_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intrinsic'); ?>
		<?php echo $form->textField($model,'intrinsic_vanster',array('size'=>5,'maxlength'=>5,'placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'intrinsic_vanster'); ?>
		<?php echo $form->textField($model,'intrinsic_hoger',array('size'=>5,'maxlength'=>5,'placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'intrinsic_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spasticitet'); ?>
		<?php echo $form->textField($model,'spasticitet',array('size'=>60,'maxlength'=>80)); ?>
		<?php echo $form->error($model,'spasticitet'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'handled_volar'); ?>
		<?php echo $form->textField($model,'handled_volar_van',array('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'handled_volar_van'); ?>
		<?php echo $form->textField($model,'handled_volar_hog',array('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'handled_volar_hog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'handled_dors'); ?>
		<?php echo $form->textField($model,'handled_dors_van',array ('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'handled_dors_van'); ?>
		<?php echo $form->textField($model,'handled_dors_hog',array ('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'handled_dors_hog'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcp_höger_ext'); ?>
		<?php echo $form->textField($model,'mcp_1_hog_ext',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'mcp_1_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_2_hog_ext',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'mcp_2_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_3_hog_ext',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'mcp_3_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_4_hog_ext',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'mcp_4_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_5_hog_ext',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'mcp_5_hog_ext'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'mcp_vänster_ext'); ?>
		<?php echo $form->textField($model,'mcp_1_van_ext',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'mcp_1_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_2_van_ext',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'mcp_2_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_3_van_ext',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'mcp_3_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_4_van_ext',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'mcp_4_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_5_van_ext',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'mcp_5_van_ext'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pip_höger_ext'); ?>
		<?php echo $form->textField($model,'pip_1_hog_ext',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'pip_1_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_2_hog_ext',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'pip_2_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_3_hog_ext',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'pip_3_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_4_hog_ext',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'pip_4_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_5_hog_ext',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'pip_5_hog_ext'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pip_vänster_ext'); ?>
		<?php echo $form->textField($model,'pip_1_van_ext',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'pip_1_van_ext'); ?>
		<?php echo $form->textField($model,'pip_2_van_ext',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'pip_2_van_ext'); ?>
		<?php echo $form->textField($model,'pip_3_van_ext',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'pip_3_van_ext'); ?>
		<?php echo $form->textField($model,'pip_4_van_ext',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'pip_4_van_ext'); ?>
		<?php echo $form->textField($model,'pip_5_van_ext',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'pip_5_van_ext'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'sensi_höger'); ?>
		<?php echo $form->textField($model,'sensi_1_hog',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'sensi_1_hog'); ?>
		<?php echo $form->textField($model,'sensi_2_hog',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'sensi_2_hog'); ?>
		<?php echo $form->textField($model,'sensi_3_hog',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'sensi_3_hog'); ?>
		<?php echo $form->textField($model,'sensi_4_hog',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'sensi_4_hog'); ?>
		<?php echo $form->textField($model,'sensi_5_hog',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'sensi_5_hog'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'sensi_vänster'); ?>
		<?php echo $form->textField($model,'sensi_1_van',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'sensi_1_van'); ?>
		<?php echo $form->textField($model,'sensi_2_van',array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'sensi_2_van'); ?>
		<?php echo $form->textField($model,'sensi_3_van',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'sensi_3_van'); ?>
		<?php echo $form->textField($model,'sensi_4_van',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'sensi_4_van'); ?>
		<?php echo $form->textField($model,'sensi_5_van',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'sensi_5_van'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anmarkningar'); ?>
		<?php echo $form->textField($model,'anmarkningar',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'anmarkningar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mcp_höger_flex'); ?>
		<?php echo $form->textField($model,'mcp_1_hog_flex',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'mcp_1_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_2_hog_flex', array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'mcp_2_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_3_hog_flex',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'mcp_3_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_4_hog_flex',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'mcp_4_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_5_hog_flex',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'mcp_5_hog_flex'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'mcp_vänster_flex'); ?>
		<?php echo $form->textField($model,'mcp_1_van_flex',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'mcp_1_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_2_van_flex', array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'mcp_2_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_3_van_flex',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'mcp_3_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_4_van_flex',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'mcp_4_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_5_van_flex',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'mcp_5_van_flex'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pip_höger_flex'); ?>
		<?php echo $form->textField($model,'pip_1_hog_flex',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'pip_1_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_2_hog_flex', array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'pip_2_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_3_hog_flex',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'pip_3_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_4_hog_flex',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'pip_4_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_5_hog_flex',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'pip_5_hog_flex'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'pip_vänster_flex'); ?>
		<?php echo $form->textField($model,'pip_1_van_flex',array('placeholder'=>'1')); ?>
		<?php echo $form->error($model,'pip_1_van_flex'); ?>
		<?php echo $form->textField($model,'pip_2_van_flex', array('placeholder'=>'2')); ?>
		<?php echo $form->error($model,'pip_2_van_flex'); ?>
		<?php echo $form->textField($model,'pip_3_van_flex',array('placeholder'=>'3')); ?>
		<?php echo $form->error($model,'pip_3_van_flex'); ?>
		<?php echo $form->textField($model,'pip_4_van_flex',array('placeholder'=>'4')); ?>
		<?php echo $form->error($model,'pip_4_van_flex'); ?>
		<?php echo $form->textField($model,'pip_5_van_flex',array('placeholder'=>'5')); ?>
		<?php echo $form->error($model,'pip_5_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arm_ext'); ?>
		<?php echo $form->textField($model,'arm_van_ext',array('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'arm_van_ext'); ?>
		<?php echo $form->textField($model,'arm_hog_ext',array('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'arm_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arm_flex'); ?>
		<?php echo $form->textField($model,'arm_van_flex',array('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'arm_van_flex'); ?>
		<?php echo $form->textField($model,'arm_hog_flex',array('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'arm_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'supination'); ?>
		<?php echo $form->textField($model,'supination_vanster',array('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'supination_vanster'); ?>
		<?php echo $form->textField($model,'supination_hoger',array('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'supination_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pronation'); ?>
		<?php echo $form->textField($model,'pronation_vanster',array('placeholder'=>'Vänster')); ?>
		<?php echo $form->error($model,'pronation_vanster'); ?>
		<?php echo $form->textField($model,'pronation_hoger',array('placeholder'=>'Höger')); ?>
		<?php echo $form->error($model,'pronation_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'spontan_finger_st'); ?>
		<?php echo $form->textField($model,'spontan_finger_st',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'spontan_finger_st'); ?>
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
