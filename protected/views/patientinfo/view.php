<?php
/* @var $this PatientinfoController */
/* @var $model Patientinfo */

$this->breadcrumbs=array(
	'Patientinfos'=>array('index'),
	$model->personnummer,
);

$this->menu=array(
	array('label'=>'List Patientinfo', 'url'=>array('index')),
	array('label'=>'Create Patientinfo', 'url'=>array('create')),
	array('label'=>'Update Patientinfo', 'url'=>array('update', 'id'=>$model->personnummer)),
	array('label'=>'Delete Patientinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personnummer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Patientinfo', 'url'=>array('admin')),
);
?>

<h1>View Patientinfo #<?php echo $model->personnummer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personnummer',
		'skadedatum',
		'socialt',
		'alder_skadan',
		'forsta_und_dat',
		'yrke_fore_sk',
		'klass_yrke',
		'klass_hoger',
		'klass_vanster',
		'traumatyp',
		'skadeniva',
		'muskler_hoger',
		'muskler_vanster',
		'dom_hand_pre',
		'dom_hand_post',
		'avslutad',
		'avslutad_dat',
		'undersoknings_pl',
		'barn',
		'amdat',
		'rollstol',
		'annan_sjd',
		'planerat_op',
		'planerat_ab',
	),
)); ?>
