<?php
/* @var $this FurnizorClientController */
/* @var $data FurnizorClient */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parola')); ?>:</b>
	<?php echo CHtml::encode($data->parola); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tip')); ?>:</b>
	<?php echo CHtml::encode($data->tip); ?>
	<br />


</div>