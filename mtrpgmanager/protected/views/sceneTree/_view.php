<?php
/* @var $this SceneTreeController */
/* @var $data SceneTree */
?>

<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('scenario_id')); ?>:</b>
	<?php echo CHtml::encode($data->scenario_id) . " - " . CHtml::encode($data->scenario->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tabletop_id')); ?>:</b>
	<?php echo CHtml::encode($data->tabletop_id) . " - " . CHtml::encode($data->tabletop->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scene_parent_num')); ?>:</b>
	<?php echo CHtml::encode($data->scene_parent_num) . " - " . CHtml::encode($data->sceneParentNum->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scene_child_num')); ?>:</b>
	<?php echo CHtml::encode($data->scene_child_num) . " - " . CHtml::encode($data->sceneChildNum->title); ?>
	<br />


</div>
