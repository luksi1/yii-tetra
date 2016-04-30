<?php
/* @var $this MuskelstatusController */
/* @var $model Muskelstatus */
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
		<?php echo $form->label($model,'trapezius_vanster'); ?>
		<?php echo $form->textField($model,'trapezius_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'trapezius_hoger'); ?>
		<?php echo $form->textField($model,'trapezius_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latissimus_vanster'); ?>
		<?php echo $form->textField($model,'latissimus_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latissimus_hoger'); ?>
		<?php echo $form->textField($model,'latissimus_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_dorsalis_hoger'); ?>
		<?php echo $form->textField($model,'del_dorsalis_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_intermed_hoger'); ?>
		<?php echo $form->textField($model,'del_intermed_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_ventrali_hoger'); ?>
		<?php echo $form->textField($model,'del_ventrali_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_intermed_vanst'); ?>
		<?php echo $form->textField($model,'del_intermed_vanst',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_ventrali_vanst'); ?>
		<?php echo $form->textField($model,'del_ventrali_vanst',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'del_dorsalis_vanst'); ?>
		<?php echo $form->textField($model,'del_dorsalis_vanst',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serratus_hoger'); ?>
		<?php echo $form->textField($model,'serratus_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serratus_vanster'); ?>
		<?php echo $form->textField($model,'serratus_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utatrotation_vanst'); ?>
		<?php echo $form->textField($model,'utatrotation_vanst',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'utatrotation_hog'); ?>
		<?php echo $form->textField($model,'utatrotation_hog',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inatrotation_hoger'); ?>
		<?php echo $form->textField($model,'inatrotation_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inatroation_vanste'); ?>
		<?php echo $form->textField($model,'inatroation_vanste',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pec_clav_hoger'); ?>
		<?php echo $form->textField($model,'pec_clav_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pec_sterno_vanster'); ?>
		<?php echo $form->textField($model,'pec_sterno_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pec_clav_vanster'); ?>
		<?php echo $form->textField($model,'pec_clav_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pec_sterno_hoger'); ?>
		<?php echo $form->textField($model,'pec_sterno_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'triceps_hoger'); ?>
		<?php echo $form->textField($model,'triceps_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'triceps_vanster'); ?>
		<?php echo $form->textField($model,'triceps_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biceps_brach_hoger'); ?>
		<?php echo $form->textField($model,'biceps_brach_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'biceps_brach_vanst'); ?>
		<?php echo $form->textField($model,'biceps_brach_vanst',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brachiorad_hoger'); ?>
		<?php echo $form->textField($model,'brachiorad_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brachiorad_vanster'); ?>
		<?php echo $form->textField($model,'brachiorad_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecrb_vanster'); ?>
		<?php echo $form->textField($model,'ecrb_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ecrb_hoger'); ?>
		<?php echo $form->textField($model,'ecrb_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pronator_hoger'); ?>
		<?php echo $form->textField($model,'pronator_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pronator_vanster'); ?>
		<?php echo $form->textField($model,'pronator_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supinator_hoger'); ?>
		<?php echo $form->textField($model,'supinator_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supinator_vanster'); ?>
		<?php echo $form->textField($model,'supinator_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fcr_hoger'); ?>
		<?php echo $form->textField($model,'fcr_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fcr_vanster'); ?>
		<?php echo $form->textField($model,'fcr_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edq_hoger'); ?>
		<?php echo $form->textField($model,'edq_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'edq_vanster'); ?>
		<?php echo $form->textField($model,'edq_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdp_vanster'); ?>
		<?php echo $form->textField($model,'fdp_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fdp_hoger'); ?>
		<?php echo $form->textField($model,'fdp_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'epl_vanster'); ?>
		<?php echo $form->textField($model,'epl_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'epl_hoger'); ?>
		<?php echo $form->textField($model,'epl_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apl_vanster'); ?>
		<?php echo $form->textField($model,'apl_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apl_hoger'); ?>
		<?php echo $form->textField($model,'apl_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpl_vanster'); ?>
		<?php echo $form->textField($model,'fpl_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fpl_hoger'); ?>
		<?php echo $form->textField($model,'fpl_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intrinsic_hoger'); ?>
		<?php echo $form->textField($model,'intrinsic_hoger',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intrinsic_vanster'); ?>
		<?php echo $form->textField($model,'intrinsic_vanster',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spasticitet'); ?>
		<?php echo $form->textField($model,'spasticitet',array('size'=>60,'maxlength'=>80)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handled_volar_hog'); ?>
		<?php echo $form->textField($model,'handled_volar_hog'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handled_volar_van'); ?>
		<?php echo $form->textField($model,'handled_volar_van'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handled_dors_hog'); ?>
		<?php echo $form->textField($model,'handled_dors_hog'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'handled_dors_van'); ?>
		<?php echo $form->textField($model,'handled_dors_van'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_1_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_1_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_2_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_2_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_3_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_3_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_4_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_4_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_5_hog_ext'); ?>
		<?php echo $form->textField($model,'mcp_5_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_1_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_1_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_2_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_2_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_3_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_3_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_4_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_4_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_5_van_ext'); ?>
		<?php echo $form->textField($model,'mcp_5_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_1_van_ext'); ?>
		<?php echo $form->textField($model,'ip_1_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_1_hog_ext'); ?>
		<?php echo $form->textField($model,'ip_1_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_2_van_ext'); ?>
		<?php echo $form->textField($model,'pip_2_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_3_van_ext'); ?>
		<?php echo $form->textField($model,'pip_3_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_4_van_ext'); ?>
		<?php echo $form->textField($model,'pip_4_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_5_van_ext'); ?>
		<?php echo $form->textField($model,'pip_5_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_2_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_2_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_3_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_3_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_4_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_4_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_5_hog_ext'); ?>
		<?php echo $form->textField($model,'pip_5_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_1_hog'); ?>
		<?php echo $form->textField($model,'sensi_1_hog',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_2_hog'); ?>
		<?php echo $form->textField($model,'sensi_2_hog',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_3_hog'); ?>
		<?php echo $form->textField($model,'sensi_3_hog',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_4_hog'); ?>
		<?php echo $form->textField($model,'sensi_4_hog',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_5_hog'); ?>
		<?php echo $form->textField($model,'sensi_5_hog',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_1_van'); ?>
		<?php echo $form->textField($model,'sensi_1_van',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_2_van'); ?>
		<?php echo $form->textField($model,'sensi_2_van',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_3_van'); ?>
		<?php echo $form->textField($model,'sensi_3_van',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_4_van'); ?>
		<?php echo $form->textField($model,'sensi_4_van',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sensi_5_van'); ?>
		<?php echo $form->textField($model,'sensi_5_van',array('size'=>3,'maxlength'=>3)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anmarkningar'); ?>
		<?php echo $form->textField($model,'anmarkningar',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_1_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_1_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_2_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_2_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_3_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_3_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_4_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_4_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_5_hog_flex'); ?>
		<?php echo $form->textField($model,'mcp_5_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_1_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_1_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_2_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_2_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_3_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_3_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_4_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_4_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mcp_5_van_flex'); ?>
		<?php echo $form->textField($model,'mcp_5_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_1_van_flex'); ?>
		<?php echo $form->textField($model,'ip_1_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_2_van_flex'); ?>
		<?php echo $form->textField($model,'pip_2_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_3_van_flex'); ?>
		<?php echo $form->textField($model,'pip_3_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_4_van_flex'); ?>
		<?php echo $form->textField($model,'pip_4_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_5_van_flex'); ?>
		<?php echo $form->textField($model,'pip_5_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_1_hog_flex'); ?>
		<?php echo $form->textField($model,'ip_1_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_2_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_2_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_3_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_3_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_4_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_4_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pip_5_hog_flex'); ?>
		<?php echo $form->textField($model,'pip_5_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm_hog_ext'); ?>
		<?php echo $form->textField($model,'arm_hog_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm_van_ext'); ?>
		<?php echo $form->textField($model,'arm_van_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm_hog_flex'); ?>
		<?php echo $form->textField($model,'arm_hog_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'arm_van_flex'); ?>
		<?php echo $form->textField($model,'arm_van_flex'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supination_hoger'); ?>
		<?php echo $form->textField($model,'supination_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'supination_vanster'); ?>
		<?php echo $form->textField($model,'supination_vanster'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pronation_hoger'); ?>
		<?php echo $form->textField($model,'pronation_hoger'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pronation_vanster'); ?>
		<?php echo $form->textField($model,'pronation_vanster'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'spontan_finger_st'); ?>
		<?php echo $form->textField($model,'spontan_finger_st',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->