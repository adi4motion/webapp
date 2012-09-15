<?php
/* @var $this FurnizorCategorieController */
/* @var $model FurnizorCategorie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'furnizor-categorie-form',
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
		<?php echo $form->labelEx($model,'categorieId'); ?>
		<?php echo $form->textField($model,'categorieId'); ?>
		<?php echo $form->error($model,'categorieId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->