<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */

$this->breadcrumbs=array(
	'Scene Trees'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SceneTree', 'url'=>array('index')),
	array('label'=>'Create SceneTree', 'url'=>array('create')),
	array('label'=>'View SceneTree', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SceneTree', 'url'=>array('admin')),
);
?>

<h1>Update SceneTree <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>