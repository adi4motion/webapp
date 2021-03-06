<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'role'); ?>
		<?php echo $form->textField($model,'role',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clientId'); ?>
		<?php echo $form->textField($model,'clientId'); ?>
		<?php echo $form->error($model,'clientId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'furnizorId'); ?>
		<?php echo $form->textField($model,'furnizorId'); ?>
		<?php echo $form->error($model,'furnizorId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->