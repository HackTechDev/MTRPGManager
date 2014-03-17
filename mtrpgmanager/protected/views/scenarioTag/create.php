<?php
/* @var $this ScenarioTagController */
/* @var $model ScenarioTag */

$this->breadcrumbs=array(
	'Scenario Tags'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ScenarioTag', 'url'=>array('index')),
	array('label'=>'Manage ScenarioTag', 'url'=>array('admin')),
);
?>

<h1>Create ScenarioTag</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>