<?php
/* @var $this MuskelstatusController */
/* @var $model Muskelstatus */

$this->breadcrumbs=array(
	'Muskelstatuses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Muskelstatus', 'url'=>array('index')),
	array('label'=>'Create Muskelstatus', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#muskelstatus-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Muskelstatuses</h1>

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
	'id'=>'muskelstatus-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'personnummer',
		'trapezius_vanster',
		'trapezius_hoger',
		'latissimus_vanster',
		'latissimus_hoger',
		'del_dorsalis_hoger',
		/*
		'del_intermed_hoger',
		'del_ventrali_hoger',
		'del_intermed_vanst',
		'del_ventrali_vanst',
		'del_dorsalis_vanst',
		'serratus_hoger',
		'serratus_vanster',
		'utatrotation_vanst',
		'utatrotation_hog',
		'inatrotation_hoger',
		'inatroation_vanste',
		'pec_clav_hoger',
		'pec_sterno_vanster',
		'pec_clav_vanster',
		'pec_sterno_hoger',
		'triceps_hoger',
		'triceps_vanster',
		'biceps_brach_hoger',
		'biceps_brach_vanst',
		'brachiorad_hoger',
		'brachiorad_vanster',
		'ecrb_vanster',
		'ecrb_hoger',
		'pronator_hoger',
		'pronator_vanster',
		'supinator_hoger',
		'supinator_vanster',
		'fcr_hoger',
		'fcr_vanster',
		'edq_hoger',
		'edq_vanster',
		'fdp_vanster',
		'fdp_hoger',
		'epl_vanster',
		'epl_hoger',
		'apl_vanster',
		'apl_hoger',
		'fpl_vanster',
		'fpl_hoger',
		'intrinsic_hoger',
		'intrinsic_vanster',
		'spasticitet',
		'handled_volar_hog',
		'handled_volar_van',
		'handled_dors_hog',
		'handled_dors_van',
		'mcp_1_hog_ext',
		'mcp_2_hog_ext',
		'mcp_3_hog_ext',
		'mcp_4_hog_ext',
		'mcp_5_hog_ext',
		'mcp_1_van_ext',
		'mcp_2_van_ext',
		'mcp_3_van_ext',
		'mcp_4_van_ext',
		'mcp_5_van_ext',
		'ip_1_van_ext',
		'ip_1_hog_ext',
		'pip_2_van_ext',
		'pip_3_van_ext',
		'pip_4_van_ext',
		'pip_5_van_ext',
		'pip_2_hog_ext',
		'pip_3_hog_ext',
		'pip_4_hog_ext',
		'pip_5_hog_ext',
		'sensi_1_hog',
		'sensi_2_hog',
		'sensi_3_hog',
		'sensi_4_hog',
		'sensi_5_hog',
		'sensi_1_van',
		'sensi_2_van',
		'sensi_3_van',
		'sensi_4_van',
		'sensi_5_van',
		'anmarkningar',
		'mcp_1_hog_flex',
		'mcp_2_hog_flex',
		'mcp_3_hog_flex',
		'mcp_4_hog_flex',
		'mcp_5_hog_flex',
		'mcp_1_van_flex',
		'mcp_2_van_flex',
		'mcp_3_van_flex',
		'mcp_4_van_flex',
		'mcp_5_van_flex',
		'ip_1_van_flex',
		'pip_2_van_flex',
		'pip_3_van_flex',
		'pip_4_van_flex',
		'pip_5_van_flex',
		'ip_1_hog_flex',
		'pip_2_hog_flex',
		'pip_3_hog_flex',
		'pip_4_hog_flex',
		'pip_5_hog_flex',
		'arm_hog_ext',
		'arm_van_ext',
		'arm_hog_flex',
		'arm_van_flex',
		'supination_hoger',
		'supination_vanster',
		'pronation_hoger',
		'pronation_vanster',
		'spontan_finger_st',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
