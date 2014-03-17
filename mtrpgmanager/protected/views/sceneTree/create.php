<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */

$this->breadcrumbs=array(
	'Scene Trees'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SceneTree', 'url'=>array('index')),
	array('label'=>'Manage SceneTree', 'url'=>array('admin')),
);
?>

<h1>Create SceneTree</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>