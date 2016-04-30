<?php
/* @var $this PreoparmController */
/* @var $model Preoparm */
/* @var $befolkningsinfo Befolkningsinfo */
?>

<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Preop - Arm
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo,'operations'=>$operations)); ?>
