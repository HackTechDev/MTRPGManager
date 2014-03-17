<?php
/* @var $this SceneTreeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scene Trees',
);

$this->menu=array(
	array('label'=>'Create SceneTree', 'url'=>array('create')),
	array('label'=>'Manage SceneTree', 'url'=>array('admin')),
);
?>

<h1>Scene Trees</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
