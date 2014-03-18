<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */

$this->breadcrumbs=array(
	'Scene Trees'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List SceneTree', 'url'=>array('index')),
	array('label'=>'Create SceneTree', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#scene-tree-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Scene Trees</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'scene-tree-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		array('name'=>'scenario_id', 'header'=>'Scenario', 'value'=>'$data->scenario->title'),
		array('name'=>'tabletop_id', 'header'=>'Tabletop', 'value'=>'$data->tabletop->name'),
		array('name'=>'scene_parent_num', 'header'=>'Scene parent num', 'value'=>'$data->sceneParentNum->title'),
		array('name'=>'scene_child_num', 'header'=>'Scene child num', 'value'=>'$data->sceneChildNum->title'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
