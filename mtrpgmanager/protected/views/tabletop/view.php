<?php
/* @var $this TabletopController */
/* @var $model Tabletop */

$this->breadcrumbs=array(
	'Tabletops'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tabletop', 'url'=>array('index')),
	array('label'=>'Create Tabletop', 'url'=>array('create')),
	array('label'=>'Update Tabletop', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tabletop', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tabletop', 'url'=>array('admin')),
);
?>

<h1>View Tabletop #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'location',
		'description',
	),
)); ?>
