<?php
/* @var $this NonPlayerCharacterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Non Player Characters',
);

$this->menu=array(
	array('label'=>'Create NonPlayerCharacter', 'url'=>array('create')),
	array('label'=>'Manage NonPlayerCharacter', 'url'=>array('admin')),
);
?>

<h1>Non Player Characters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
