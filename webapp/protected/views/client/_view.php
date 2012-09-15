<?php
/* @var $this ClientController */
/* @var $data Client */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clientId), array('view', 'id'=>$data->clientId)); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('acces')); ?>:</b>
	<?php echo CHtml::encode($data->acces); ?>
	<br />


</div>