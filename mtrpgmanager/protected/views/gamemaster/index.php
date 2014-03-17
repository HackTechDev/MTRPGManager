<?php
/* @var $this GamemasterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gamemasters',
);

$this->menu=array(
	array('label'=>'Create Gamemaster', 'url'=>array('create')),
	array('label'=>'Manage Gamemaster', 'url'=>array('admin')),
);
?>

<h1>Gamemasters</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
