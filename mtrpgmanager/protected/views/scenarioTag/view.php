<?php
/* @var $this ScenarioTagController */
/* @var $model ScenarioTag */

$this->breadcrumbs=array(
	'Scenario Tags'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ScenarioTag', 'url'=>array('index')),
	array('label'=>'Create ScenarioTag', 'url'=>array('create')),
	array('label'=>'Update ScenarioTag', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ScenarioTag', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ScenarioTag', 'url'=>array('admin')),
);
?>

<h1>View ScenarioTag #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tagname',
		'title',
		'description',
	),
)); ?>
