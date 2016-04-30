<?php
/* @var $this PatientinfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Patientinfos',
);

$this->menu=array(
	array('label'=>'Create Patientinfo', 'url'=>array('create')),
	array('label'=>'Manage Patientinfo', 'url'=>array('admin')),
);
?>

<h1>Patientinfos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
