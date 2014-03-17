<?php
/* @var $this DocumentController */
/* @var $model Document */

$this->breadcrumbs=array(
	'Documents Manager'=>array('admin'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Create Document', 'url'=>array('create')),
	array('label'=>'Update Document', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Document', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Document', 'url'=>array('admin')),
);
?>

<h1>View Document #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		array('label'=>'Document Type', 'value'=>$model->documenttype->name),
		'number',
		'album',
		'author',
		'duration',
		'description',
		'url',
	),
)); ?>
