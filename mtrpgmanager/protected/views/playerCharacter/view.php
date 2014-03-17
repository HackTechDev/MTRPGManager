<?php
/* @var $this PlayerCharacterController */
/* @var $model PlayerCharacter */

$this->breadcrumbs=array(
	'Player Characters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PlayerCharacter', 'url'=>array('index')),
	array('label'=>'Create PlayerCharacter', 'url'=>array('create')),
	array('label'=>'Update PlayerCharacter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PlayerCharacter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>View PlayerCharacter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		'nickname',
	),
)); ?>
