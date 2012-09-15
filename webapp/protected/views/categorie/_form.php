<?php
/* @var $this CategorieController */
/* @var $model Categorie */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'categorie-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'parentId'); ?>
		<?php echo $form->dropDownList($model,'parentId',  Categorie::fetchlist(), array('prompt'=>'-/-')); ?>
		<?php echo $form->error($model,'parentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'nume'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descriere'); ?>
		<?php echo $form->textArea($model,'descriere',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descriere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaTitlu'); ?>
		<?php echo $form->textField($model,'metaTitlu',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'metaTitlu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metaDescriere'); ?>
		<?php echo $form->textArea($model,'metaDescriere',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'metaDescriere'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'titluImg'); ?>
		<?php echo $form->textField($model,'titluImg',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'titluImg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'altImg'); ?>
		<?php echo $form->textField($model,'altImg',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'altImg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'img'); ?>
		<?php echo $form->textField($model,'img',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'img'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'keywords'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->