<?php
/* @var $this ScenarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Scenarios',
);

$this->menu=array(
	array('label'=>'Create Scenario', 'url'=>array('create')),
	array('label'=>'Manage Scenario', 'url'=>array('admin')),
);
?>

<h1>Scenarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
