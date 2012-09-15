<?php
/* @var $this ClientController */
/* @var $model Client */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefon'); ?>
		<?php echo $form->textField($model,'telefon',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'telefon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'parola'); ?>
		<?php echo $form->passwordField($model,'parola',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'parola'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'passwordConfirm'); ?>
		<?php echo $form->passwordField($model,'passwordConfirm',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'passwordConfirm'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'acceptTAC'); ?>
		<?php echo $form->checkbox($model,'acceptTAC'); ?>
		<?php echo $form->error($model,'acceptTAC'); ?>
	</div>

        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->