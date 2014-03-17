<?php
/* @var $this PlayerCharacterController */
/* @var $model PlayerCharacter */

$this->breadcrumbs=array(
	'Player Characters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PlayerCharacter', 'url'=>array('index')),
	array('label'=>'Manage PlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Create PlayerCharacter</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>