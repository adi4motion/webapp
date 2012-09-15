<?php
/* @var $this FurnizorController */
/* @var $data Furnizor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('furnizorId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->furnizorId), array('view', 'id'=>$data->furnizorId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nume')); ?>:</b>
	<?php echo CHtml::encode($data->nume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefon')); ?>:</b>
	<?php echo CHtml::encode($data->telefon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parola')); ?>:</b>
	<?php echo CHtml::encode($data->parola); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>