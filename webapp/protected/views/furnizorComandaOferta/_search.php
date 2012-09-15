<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $model FurnizorComandaOferta */
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
		<?php echo $form->label($model,'comandaId'); ?>
		<?php echo $form->textField($model,'comandaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ofertaId'); ?>
		<?php echo $form->textField($model,'ofertaId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_oferta'); ?>
		<?php echo $form->textField($model,'status_oferta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_comanda'); ?>
		<?php echo $form->textField($model,'status_comanda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->