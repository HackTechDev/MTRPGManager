<?php
/* @var $this SceneController */
/* @var $data Scene */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num')); ?>:</b>
	<?php echo CHtml::encode($data->num); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('starttime')); ?>:</b>
	<?php echo CHtml::encode($data->starttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endtime')); ?>:</b>
	<?php echo CHtml::encode($data->endtime); ?>
	<br />


</div>