<?php
/* @var $this NonPlayerCharacterController */
/* @var $model NonPlayerCharacter */

$this->breadcrumbs=array(
	'Non Player Characters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List NonPlayerCharacter', 'url'=>array('index')),
	array('label'=>'Manage NonPlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Create NonPlayerCharacter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>