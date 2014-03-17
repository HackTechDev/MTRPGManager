<?php
/* @var $this ScenarioTagController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scenario Tags',
);

$this->menu=array(
	array('label'=>'Create ScenarioTag', 'url'=>array('create')),
	array('label'=>'Manage ScenarioTag', 'url'=>array('admin')),
);
?>

<h1>Scenario Tags</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
