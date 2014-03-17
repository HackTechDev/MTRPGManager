<?php
/* @var $this SheetController */
/* @var $model Sheet */

$this->breadcrumbs=array(
	'Sheets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sheet', 'url'=>array('index')),
	array('label'=>'Create Sheet', 'url'=>array('create')),
	array('label'=>'View Sheet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sheet', 'url'=>array('admin')),
);
?>

<h1>Update Sheet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>