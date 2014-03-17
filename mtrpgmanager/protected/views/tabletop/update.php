<?php
/* @var $this TabletopController */
/* @var $model Tabletop */

$this->breadcrumbs=array(
	'Tabletops'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tabletop', 'url'=>array('index')),
	array('label'=>'Create Tabletop', 'url'=>array('create')),
	array('label'=>'View Tabletop', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tabletop', 'url'=>array('admin')),
);
?>

<h1>Update Tabletop <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>