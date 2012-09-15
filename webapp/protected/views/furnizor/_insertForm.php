<?php
/* @var $this FurnizorController */
/* @var $model Furnizor */
/* @var $form CActiveForm */
/* @var $model_categorie Categorie */
$model_categorie=Categorie::model();
?> 

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'furnizor-form',
	'enableAjaxValidation'=>true,
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
		<?php echo $form->textField($model,'parola',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'parola'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'passwordConfirm'); ?>
		<?php echo $form->textField($model,'passwordConfirm',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'passwordConfirm'); ?>
	</div>

	<div class="row">
               <!-- 
                <?php echo $form->checkboxlist($model,'dropDownList', $model->returnCategorii(), array('prompt'=>'Selecteaza categorie','multiple'=>'multiple')); ?>
                -->
                <?php echo $form->labelEx($model,'dropDownList'); ?>
                <?php $this->widget('ext.widgets.EchMultiSelect', array(
			'model' => Categorie::model(),
			'dropDownAttribute' => 'nume',     
			'data' => $model->returnCategorii(),    
			'dropDownHtmlOptions'=> array(
				'style'=>'width:378px;'
			),
			'options' => array( 
				'header'=> Yii::t('application','Alege o categorie !'),
				'minWidth'=>350,
				'position'=>array('my'=>'left bottom', 'at'=>'left top'),
				'filter'=>true,
			),
			'filterOptions'=> array(
				'width'=>150,
			),
                     )); ?>
                <?php echo $form->error($model,'dropDownList'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'acceptTC'); ?>
		<?php echo $form->checkBox($model,'acceptTC'); ?>
		<?php echo $form->error($model,'acceptTC'); ?>
	</div>
        
        <?php if(CCaptcha::checkRequirements()): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	</div>
	<?php endif; ?>
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->