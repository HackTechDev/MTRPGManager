<?php
/* @var $this SceneController */
/* @var $model Scene */

$this->breadcrumbs=array(
	'Scenes'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Scene', 'url'=>array('index')),
	array('label'=>'Create Scene', 'url'=>array('create')),
	array('label'=>'View Scene', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Scene', 'url'=>array('admin')),
);
?>

<h1>Update Scene <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>