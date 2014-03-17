<?php
/* @var $this GamemasterController */
/* @var $model Gamemaster */

$this->breadcrumbs=array(
	'Gamemasters'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Gamemaster', 'url'=>array('index')),
	array('label'=>'Create Gamemaster', 'url'=>array('create')),
	array('label'=>'Update Gamemaster', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gamemaster', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gamemaster', 'url'=>array('admin')),
);
?>

<h1>View Gamemaster #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
