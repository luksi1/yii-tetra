<?php
/* @var $this AterarmController */
/* @var $model Aterarm */
/* @var $befolkningsinfo Befolkningsinfo */
?>

<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Återbesök - Arm
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo,'operations'=>$operations)); ?>
