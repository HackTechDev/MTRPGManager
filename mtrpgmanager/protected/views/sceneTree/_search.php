<?php
/* @var $this SceneTreeController */
/* @var $model SceneTree */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scenario_id'); ?>
		<?php echo $form->textField($model,'scenario_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scene_parent_num'); ?>
		<?php echo $form->textField($model,'scene_parent_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'scene_child_num'); ?>
		<?php echo $form->textField($model,'scene_child_num'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->