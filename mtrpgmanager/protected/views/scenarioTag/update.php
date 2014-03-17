<?php
/* @var $this ScenarioTagController */
/* @var $model ScenarioTag */

$this->breadcrumbs=array(
	'Scenario Tags'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ScenarioTag', 'url'=>array('index')),
	array('label'=>'Create ScenarioTag', 'url'=>array('create')),
	array('label'=>'View ScenarioTag', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ScenarioTag', 'url'=>array('admin')),
);
?>

<h1>Update ScenarioTag <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>