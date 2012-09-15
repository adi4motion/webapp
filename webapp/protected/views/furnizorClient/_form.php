<?php
/* @var $this FurnizorClientController */
/* @var $model FurnizorClient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'furnizor-client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parola'); ?>
		<?php echo $form->textField($model,'parola',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'parola'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tip'); ?>
		<?php echo $form->textField($model,'tip',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tip'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->