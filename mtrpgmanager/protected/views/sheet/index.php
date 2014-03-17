<?php
/* @var $this SheetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sheets',
);

$this->menu=array(
	array('label'=>'Create Sheet', 'url'=>array('create')),
	array('label'=>'Manage Sheet', 'url'=>array('admin')),
);
?>

<h1>Sheets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
