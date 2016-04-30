<?php
/* @var $this MuskelstatusController */
/* @var $model Muskelstatus */
?>

<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Boka en operation
</div>


<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo)); ?>
