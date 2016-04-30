<?php
/* @var $this MuskelstatusController */
/* @var $data Muskelstatus */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnummer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personnummer), array('view', 'id'=>$data->personnummer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trapezius_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->trapezius_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('trapezius_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->trapezius_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latissimus_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->latissimus_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latissimus_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->latissimus_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_dorsalis_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->del_dorsalis_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_intermed_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->del_intermed_hoger); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('del_ventrali_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->del_ventrali_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_intermed_vanst')); ?>:</b>
	<?php echo CHtml::encode($data->del_intermed_vanst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_ventrali_vanst')); ?>:</b>
	<?php echo CHtml::encode($data->del_ventrali_vanst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('del_dorsalis_vanst')); ?>:</b>
	<?php echo CHtml::encode($data->del_dorsalis_vanst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serratus_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->serratus_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serratus_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->serratus_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utatrotation_vanst')); ?>:</b>
	<?php echo CHtml::encode($data->utatrotation_vanst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('utatrotation_hog')); ?>:</b>
	<?php echo CHtml::encode($data->utatrotation_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inatrotation_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->inatrotation_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inatroation_vanste')); ?>:</b>
	<?php echo CHtml::encode($data->inatroation_vanste); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pec_clav_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->pec_clav_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pec_sterno_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->pec_sterno_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pec_clav_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->pec_clav_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pec_sterno_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->pec_sterno_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('triceps_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->triceps_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('triceps_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->triceps_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biceps_brach_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->biceps_brach_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('biceps_brach_vanst')); ?>:</b>
	<?php echo CHtml::encode($data->biceps_brach_vanst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brachiorad_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->brachiorad_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brachiorad_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->brachiorad_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecrb_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->ecrb_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecrb_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->ecrb_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronator_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->pronator_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronator_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->pronator_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supinator_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->supinator_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supinator_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->supinator_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcr_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->fcr_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fcr_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->fcr_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edq_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->edq_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edq_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->edq_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdp_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->fdp_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fdp_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->fdp_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epl_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->epl_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epl_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->epl_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apl_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->apl_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apl_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->apl_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fpl_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->fpl_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fpl_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->fpl_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intrinsic_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->intrinsic_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intrinsic_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->intrinsic_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spasticitet')); ?>:</b>
	<?php echo CHtml::encode($data->spasticitet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handled_volar_hog')); ?>:</b>
	<?php echo CHtml::encode($data->handled_volar_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handled_volar_van')); ?>:</b>
	<?php echo CHtml::encode($data->handled_volar_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handled_dors_hog')); ?>:</b>
	<?php echo CHtml::encode($data->handled_dors_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('handled_dors_van')); ?>:</b>
	<?php echo CHtml::encode($data->handled_dors_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_1_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_1_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_2_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_2_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_3_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_3_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_4_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_4_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_5_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_5_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_1_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_1_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_2_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_2_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_3_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_3_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_4_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_4_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_5_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_5_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_1_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->ip_1_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_1_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->ip_1_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_2_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_2_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_3_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_3_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_4_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_4_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_5_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_5_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_2_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_2_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_3_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_3_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_4_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_4_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_5_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->pip_5_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_1_hog')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_1_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_2_hog')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_2_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_3_hog')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_3_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_4_hog')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_4_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_5_hog')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_5_hog); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_1_van')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_1_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_2_van')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_2_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_3_van')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_3_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_4_van')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_4_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sensi_5_van')); ?>:</b>
	<?php echo CHtml::encode($data->sensi_5_van); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anmarkningar')); ?>:</b>
	<?php echo CHtml::encode($data->anmarkningar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_1_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_1_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_2_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_2_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_3_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_3_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_4_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_4_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_5_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_5_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_1_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_1_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_2_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_2_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_3_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_3_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_4_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_4_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mcp_5_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->mcp_5_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_1_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->ip_1_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_2_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_2_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_3_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_3_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_4_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_4_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_5_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_5_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_1_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->ip_1_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_2_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_2_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_3_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_3_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_4_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_4_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pip_5_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->pip_5_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm_hog_ext')); ?>:</b>
	<?php echo CHtml::encode($data->arm_hog_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm_van_ext')); ?>:</b>
	<?php echo CHtml::encode($data->arm_van_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm_hog_flex')); ?>:</b>
	<?php echo CHtml::encode($data->arm_hog_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('arm_van_flex')); ?>:</b>
	<?php echo CHtml::encode($data->arm_van_flex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supination_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->supination_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('supination_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->supination_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronation_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->pronation_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pronation_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->pronation_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spontan_finger_st')); ?>:</b>
	<?php echo CHtml::encode($data->spontan_finger_st); ?>
	<br />

	*/ ?>

</div>