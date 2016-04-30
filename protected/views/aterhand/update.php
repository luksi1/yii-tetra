<?php
/* @var $this AterhandController */
/* @var $model Aterhand */
/* @var $befolkningsinfo Befolkningsinfo */
?>

<div class="box-title">
<?php echo $befolkningsinfo->enamn . ', ' . $befolkningsinfo->fnamn; ?>
</div>
<div class="box-subtitle">
Återbesök - Hand
</div>

<?php $this->renderPartial('_form', array('model'=>$model, 'befolkningsinfo'=>$befolkningsinfo,'operations'=>$operations)); ?>
