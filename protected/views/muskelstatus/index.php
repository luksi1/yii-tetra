<?php
/* @var $this MuskelstatusController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Muskelstatuses',
);

$this->menu=array(
	array('label'=>'Create Muskelstatus', 'url'=>array('create')),
	array('label'=>'Manage Muskelstatus', 'url'=>array('admin')),
);
?>

<h1>Muskelstatuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
