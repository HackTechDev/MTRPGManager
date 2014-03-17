<?php
/* @var $this ScenarioController */
/* @var $data Scenario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scenariotag')); ?>:</b>
	<?php echo CHtml::encode($data->scenariotag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('synopsis')); ?>:</b>
	<?php echo CHtml::encode($data->synopsis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('scenario_id')); ?>:</b>
	<?php echo CHtml::encode($data->scenario_id); ?>
	<br />


</div>