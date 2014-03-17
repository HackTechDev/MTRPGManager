<?php
/* @var $this TabletopController */
/* @var $model Tabletop */

$this->breadcrumbs=array(
	'Tabletops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tabletop', 'url'=>array('index')),
	array('label'=>'Manage Tabletop', 'url'=>array('admin')),
);
?>

<h1>Create Tabletop</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>