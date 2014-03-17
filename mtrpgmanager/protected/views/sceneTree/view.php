<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */

$this->breadcrumbs=array(
	'Scene Trees'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SceneTree', 'url'=>array('index')),
	array('label'=>'Create SceneTree', 'url'=>array('create')),
	array('label'=>'Update SceneTree', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SceneTree', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SceneTree', 'url'=>array('admin')),
);
?>

<h1>View SceneTree #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		array('label'=>'Scenario', 'value'=>$model->scenario->title),
		array('label'=>'Scene Parent Num', 'value'=>$model->sceneParentNum->title),
		array('label'=>'Scene Child Num', 'value'=>$model->sceneChildNum->title),
	),
)); ?>
