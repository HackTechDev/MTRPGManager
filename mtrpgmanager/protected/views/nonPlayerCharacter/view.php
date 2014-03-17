<?php
/* @var $this NonPlayerCharacterController */
/* @var $model NonPlayerCharacter */

$this->breadcrumbs=array(
	'Non Player Characters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List NonPlayerCharacter', 'url'=>array('index')),
	array('label'=>'Create NonPlayerCharacter', 'url'=>array('create')),
	array('label'=>'Update NonPlayerCharacter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete NonPlayerCharacter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage NonPlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>View NonPlayerCharacter #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		'nickname',
	),
)); ?>
