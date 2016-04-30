<?php
/* @var $this PatientinfoController */
/* @var $model Patientinfo */

$this->breadcrumbs=array(
	'Patientinfos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Patientinfo', 'url'=>array('index')),
	array('label'=>'Create Patientinfo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#patientinfo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Patientinfos</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'patientinfo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'personnummer',
		'skadedatum',
		'socialt',
		'alder_skadan',
		'forsta_und_dat',
		'yrke_fore_sk',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
