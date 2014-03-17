<?php
/* @var $this SceneController */
/* @var $model Scene */

$this->breadcrumbs=array(
	'Scenes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Scene', 'url'=>array('index')),
	array('label'=>'Manage Scene', 'url'=>array('admin')),
);
?>

<h1>Create Scene</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>