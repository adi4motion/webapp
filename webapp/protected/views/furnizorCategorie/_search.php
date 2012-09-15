<?php
/* @var $this FurnizorCategorieController */
/* @var $model FurnizorCategorie */
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
		<?php echo $form->label($model,'furnizorId'); ?>
		<?php echo $form->textField($model,'furnizorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categorieId'); ?>
		<?php echo $form->textField($model,'categorieId'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->