<?php
/* @var $this BefolkningsinfoController */
/* @var $data Befolkningsinfo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnummer')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personnummer), array('view', 'id'=>$data->personnummer)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fnamn')); ?>:</b>
	<?php echo CHtml::encode($data->fnamn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enamn')); ?>:</b>
	<?php echo CHtml::encode($data->enamn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kon')); ?>:</b>
	<?php echo CHtml::encode($data->kon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adress')); ?>:</b>
	<?php echo CHtml::encode($data->adress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ort')); ?>:</b>
	<?php echo CHtml::encode($data->ort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postnummer')); ?>:</b>
	<?php echo CHtml::encode($data->postnummer); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lan')); ?>:</b>
	<?php echo CHtml::encode($data->lan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kommun')); ?>:</b>
	<?php echo CHtml::encode($data->kommun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonnummer')); ?>:</b>
	<?php echo CHtml::encode($data->telefonnummer); ?>
	<br />

	*/ ?>

</div>