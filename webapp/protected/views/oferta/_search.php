<?php
/* @var $this OfertaController */
/* @var $model Oferta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ofertaId'); ?>
		<?php echo $form->textField($model,'ofertaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'comandaId'); ?>
		<?php echo $form->textField($model,'comandaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'furnizorId'); ?>
		<?php echo $form->textField($model,'furnizorId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'continut'); ?>
		<?php echo $form->textArea($model,'continut',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->