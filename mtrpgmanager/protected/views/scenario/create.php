<?php
/* @var $this ScenarioController */
/* @var $model Scenario */

$this->breadcrumbs=array(
	'Scenarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scenario', 'url'=>array('index')),
	array('label'=>'Manage Scenario', 'url'=>array('admin')),
);
?>

<h1>Create Scenario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>