<?php
/* @var $this PatientinfoController */
/* @var $model Patientinfo */
?>


<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Patientinformation
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo)); ?>

