<?php
/* @var $this GamemasterController */
/* @var $model Gamemaster */

$this->breadcrumbs=array(
	'Gamemasters'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gamemaster', 'url'=>array('index')),
	array('label'=>'Create Gamemaster', 'url'=>array('create')),
	array('label'=>'View Gamemaster', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Gamemaster', 'url'=>array('admin')),
);
?>

<h1>Update Gamemaster <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>