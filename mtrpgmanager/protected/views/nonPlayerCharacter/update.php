<?php
/* @var $this NonPlayerCharacterController */
/* @var $model NonPlayerCharacter */

$this->breadcrumbs=array(
	'Non Player Characters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List NonPlayerCharacter', 'url'=>array('index')),
	array('label'=>'Create NonPlayerCharacter', 'url'=>array('create')),
	array('label'=>'View NonPlayerCharacter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage NonPlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Update NonPlayerCharacter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>