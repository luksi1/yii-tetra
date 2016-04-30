<?php
/* @var $this BefolkningsinfoController */
/* @var $model Befolkningsinfo */
?>

<div class="box-title">
<?php echo $model->enamn . ', ' . $model->fnamn; ?>
</div>
<div class="box-subtitle">
Befolkningsinformation
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
