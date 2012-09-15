<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $model FurnizorComandaOferta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'furnizor-comanda-oferta-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'furnizorId'); ?>
		<?php echo $form->textField($model,'furnizorId'); ?>
		<?php echo $form->error($model,'furnizorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comandaId'); ?>
		<?php echo $form->textField($model,'comandaId'); ?>
		<?php echo $form->error($model,'comandaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ofertaId'); ?>
		<?php echo $form->textField($model,'ofertaId'); ?>
		<?php echo $form->error($model,'ofertaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_oferta'); ?>
		<?php echo $form->textField($model,'status_oferta'); ?>
		<?php echo $form->error($model,'status_oferta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_comanda'); ?>
		<?php echo $form->textField($model,'status_comanda'); ?>
		<?php echo $form->error($model,'status_comanda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->