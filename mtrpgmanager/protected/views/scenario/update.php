<?php
/* @var $this ScenarioController */
/* @var $model Scenario */

$this->breadcrumbs=array(
	'Scenarios'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scenario', 'url'=>array('index')),
	array('label'=>'Create Scenario', 'url'=>array('create')),
	array('label'=>'View Scenario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scenario', 'url'=>array('admin')),
);
?>

<h1>Update Scenario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>