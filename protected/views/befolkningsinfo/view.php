<?php
/* @var $this BefolkningsinfoController */
/* @var $model Befolkningsinfo */

$this->breadcrumbs=array(
	'Befolkningsinfos'=>array('index'),
	$model->personnummer,
);

$this->menu=array(
	array('label'=>'List Befolkningsinfo', 'url'=>array('index')),
	array('label'=>'Create Befolkningsinfo', 'url'=>array('create')),
	array('label'=>'Update Befolkningsinfo', 'url'=>array('update', 'id'=>$model->personnummer)),
	array('label'=>'Delete Befolkningsinfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personnummer),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Befolkningsinfo', 'url'=>array('admin')),
);
?>

<h1>View Befolkningsinfo #<?php echo $model->personnummer; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personnummer',
		'fnamn',
		'enamn',
		'kon',
		'adress',
		'ort',
		'postnummer',
		'lan',
		'kommun',
		'telefonnummer',
	),
)); ?>
