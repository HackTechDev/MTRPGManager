<?php
/* @var $this ScenarioController */
/* @var $model Scenario */

$this->breadcrumbs=array(
	'Scenarios'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Scenario', 'url'=>array('index')),
	array('label'=>'Create Scenario', 'url'=>array('create')),
	array('label'=>'Update Scenario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Scenario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Scenario', 'url'=>array('admin')),
);
?>

<h1>View Scenario #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'scenariotag',
		'synopsis',
		'scenario_id',
	),
)); ?>
