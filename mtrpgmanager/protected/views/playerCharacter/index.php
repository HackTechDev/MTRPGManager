<?php
/* @var $this PlayerCharacterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Player Characters',
);

$this->menu=array(
	array('label'=>'Create PlayerCharacter', 'url'=>array('create')),
	array('label'=>'Manage PlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Player Characters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
