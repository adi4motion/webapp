<?php
/* @var $this ComandaController */
/* @var $model Comanda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php 
$id=0;
$form=$this->beginWidget('CActiveForm', array(
	'id'=>'comanda-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

        <div class="row">
		<?php echo $form->label($model,'Categorie'); ?>
		<?php echo $form->dropDownList($model,'topcategorieId',Categorie::fetchlist(),array('prompt'=>'--/--')); ?>
		<?php echo $form->error($model,'topcategorieId'); ?>
	</div>
        
        <div class="row" id="cat">
		<?php echo $form->label($model,'Subcategorie');; ?>
		<?php echo $form->dropDownList($model,'categorieId',array('prompt'=>'')); ?>
		<?php echo $form->error($model,'categorieId'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<script>
    object=$('#Comanda_topcategorieId');
    object.change(function()
    {
        $.ajax({
                    type: "POST",
                    url: "<?php echo Yii::app()->createUrl('/categorie/fetchSublist') ?>&id="+object.val()
                  }).done(function( msg ) {
                    $('#Comanda_categorieId').removeAttr('disabled');
                    $('#Comanda_categorieId').html(msg);
                  });
        });
</script>