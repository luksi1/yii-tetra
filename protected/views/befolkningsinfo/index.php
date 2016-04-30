<?php
/* @var $this BefolkningsinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Befolkningsinfos',
);

$this->menu=array(
	array('label'=>'Create Befolkningsinfo', 'url'=>array('create')),
	array('label'=>'Manage Befolkningsinfo', 'url'=>array('admin')),
);
?>

<h1>Befolkningsinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
