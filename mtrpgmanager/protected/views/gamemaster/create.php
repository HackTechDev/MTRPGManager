<?php
/* @var $this GamemasterController */
/* @var $model Gamemaster */

$this->breadcrumbs=array(
	'Gamemasters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Gamemaster', 'url'=>array('index')),
	array('label'=>'Manage Gamemaster', 'url'=>array('admin')),
);
?>

<h1>Create Gamemaster</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>