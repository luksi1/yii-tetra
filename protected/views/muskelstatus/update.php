<?php
/* @var $this MuskelstatusController */
/* @var $model Muskelstatus */
/* @var $befolkningsinfo Befolkningsinfo */
?>
<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Muskelstatus
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo)); ?>
