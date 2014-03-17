<?php
/* @var $this SheetController */
/* @var $model Sheet */

$this->breadcrumbs=array(
	'Sheets'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Sheet', 'url'=>array('index')),
	array('label'=>'Create Sheet', 'url'=>array('create')),
	array('label'=>'Update Sheet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sheet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sheet', 'url'=>array('admin')),
);
?>

<h1>View Sheet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data',
		'created',
		'updated',
	),
)); ?>
