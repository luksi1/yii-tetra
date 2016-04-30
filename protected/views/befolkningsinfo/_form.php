<?php
/* @var $this BefolkningsinfoController */
/* @var $model Befolkningsinfo */
/* @var $form CActiveForm */
?>

<div class="form pure-form pure-form-aligned">

<?php $form = $this->beginWidget('CActiveForm'); ?>

<?php /*$form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'verticalForm',
	'htmlOptions'=>array('class'=>'pure-form pure-form-stacked well'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
)); */?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'personnummer'); ?>
		<?php echo $form->textField($model,'personnummer',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'personnummer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fnamn'); ?>
		<?php echo $form->textField($model,'fnamn',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fnamn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enamn'); ?>
		<?php echo $form->textField($model,'enamn',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'enamn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kon'); ?>
		<?php echo $form->textField($model,'kon',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'kon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adress'); ?>
		<?php echo $form->textField($model,'adress',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'adress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ort'); ?>
		<?php echo $form->textField($model,'ort',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ort'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postnummer'); ?>
		<?php echo $form->textField($model,'postnummer',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'postnummer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lan'); ?>
		<?php echo $form->textField($model,'lan',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'lan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kommun'); ?>
		<?php echo $form->textField($model,'kommun',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kommun'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefonnummer'); ?>
		<?php echo $form->textField($model,'telefonnummer',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefonnummer'); ?>
	</div>
	<div class="pure-controls">
		<?php
			if ($model->isNewRecord) {
				echo CHtml::submitButton('Skapa', array('class'=>'pure-button-orange pure-button'));
			} else {
				echo CHtml::submitButton('Uppdatera', array('class'=>'pure-button-orange pure-button'));
			}

		?>
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Create',array('class'=>'pure-button pure-button-active') : 'Save', array('class'=>'pure-button pure-button-active') ); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
