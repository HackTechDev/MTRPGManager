<?php
/* @var $this SheetController */
/* @var $model Sheet */

$this->breadcrumbs=array(
	'Sheets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sheet', 'url'=>array('index')),
	array('label'=>'Manage Sheet', 'url'=>array('admin')),
);
?>

<h1>Create Sheet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>