<?php
/* @var $this PreophandController */
/* @var $model Preophand */
/* @var $befolkningsinfo Befolkningsinfo */
?>

<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Preop - Hand
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo,'operations'=>$operations)); ?>
