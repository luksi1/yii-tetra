<?php
/* @var $this PatientinfoController */
/* @var $data Patientinfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnummer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personnummer), array('view', 'id'=>$data->personnummer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skadedatum')); ?>:</b>
	<?php echo CHtml::encode($data->skadedatum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('socialt')); ?>:</b>
	<?php echo CHtml::encode($data->socialt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alder_skadan')); ?>:</b>
	<?php echo CHtml::encode($data->alder_skadan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('forsta_und_dat')); ?>:</b>
	<?php echo CHtml::encode($data->forsta_und_dat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('yrke_fore_sk')); ?>:</b>
	<?php echo CHtml::encode($data->yrke_fore_sk); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('klass_yrke')); ?>:</b>
	<?php echo CHtml::encode($data->klass_yrke); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('klass_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->klass_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('klass_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->klass_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('traumatyp')); ?>:</b>
	<?php echo CHtml::encode($data->traumatyp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skadeniva')); ?>:</b>
	<?php echo CHtml::encode($data->skadeniva); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muskler_hoger')); ?>:</b>
	<?php echo CHtml::encode($data->muskler_hoger); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('muskler_vanster')); ?>:</b>
	<?php echo CHtml::encode($data->muskler_vanster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dom_hand_pre')); ?>:</b>
	<?php echo CHtml::encode($data->dom_hand_pre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dom_hand_post')); ?>:</b>
	<?php echo CHtml::encode($data->dom_hand_post); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avslutad')); ?>:</b>
	<?php echo CHtml::encode($data->avslutad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avslutad_dat')); ?>:</b>
	<?php echo CHtml::encode($data->avslutad_dat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('undersoknings_pl')); ?>:</b>
	<?php echo CHtml::encode($data->undersoknings_pl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barn')); ?>:</b>
	<?php echo CHtml::encode($data->barn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('amdat')); ?>:</b>
	<?php echo CHtml::encode($data->amdat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rollstol')); ?>:</b>
	<?php echo CHtml::encode($data->rollstol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('annan_sjd')); ?>:</b>
	<?php echo CHtml::encode($data->annan_sjd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planerat_op')); ?>:</b>
	<?php echo CHtml::encode($data->planerat_op); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planerat_ab')); ?>:</b>
	<?php echo CHtml::encode($data->planerat_ab); ?>
	<br />

	*/ ?>

</div>