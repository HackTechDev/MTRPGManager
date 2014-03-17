<?php
/* @var $this ScenarioController */
/* @var $model Scenario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'scenario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scenariotag'); ?>
		<?php echo $form->textField($model,'scenariotag',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'scenariotag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'synopsis'); ?>
		<?php echo $form->textArea($model,'synopsis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'synopsis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'scenario_id'); ?>
		<?php echo $form->textField($model,'scenario_id'); ?>
		<?php echo $form->error($model,'scenario_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->