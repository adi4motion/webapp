<?php
/* @var $this OfertaController */
/* @var $model Oferta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'oferta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'comandaId'); ?>
		<?php echo $form->textField($model,'comandaId'); ?>
		<?php echo $form->error($model,'comandaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'furnizorId'); ?>
		<?php echo $form->textField($model,'furnizorId'); ?>
		<?php echo $form->error($model,'furnizorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'continut'); ?>
		<?php echo $form->textArea($model,'continut',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'continut'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->