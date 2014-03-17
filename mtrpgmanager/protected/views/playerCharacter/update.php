<?php
/* @var $this PlayerCharacterController */
/* @var $model PlayerCharacter */

$this->breadcrumbs=array(
	'Player Characters'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PlayerCharacter', 'url'=>array('index')),
	array('label'=>'Create PlayerCharacter', 'url'=>array('create')),
	array('label'=>'View PlayerCharacter', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Update PlayerCharacter <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>