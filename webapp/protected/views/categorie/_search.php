<?php
/* @var $this CategorieController */
/* @var $model Categorie */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'categorieId'); ?>
		<?php echo $form->textField($model,'categorieId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'parentId'); ?>
		<?php echo $form->textField($model,'parentId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nume'); ?>
		<?php echo $form->textField($model,'nume',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descriere'); ?>
		<?php echo $form->textArea($model,'descriere',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metaTitlu'); ?>
		<?php echo $form->textField($model,'metaTitlu',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'metaDescriere'); ?>
		<?php echo $form->textArea($model,'metaDescriere',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'titluImg'); ?>
		<?php echo $form->textField($model,'titluImg',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'altImg'); ?>
		<?php echo $form->textField($model,'altImg',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'img'); ?>
		<?php echo $form->textField($model,'img',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>256)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->