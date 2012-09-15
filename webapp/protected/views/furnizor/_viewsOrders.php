<?php
/* @var $this ComandaController */
/* @var $data Comanda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('comandaId')); ?>:</b>
	<?php echo CHtml::encode($data->comandaId.' ');if(Furnizor::model()->returnStatusComenzi()) { echo '<b>'; echo CHtml::link(CHtml::encode($data->nume), array('viewOrder', 'id'=>$data->comandaId));echo '</b>'; } else echo CHtml::link(CHtml::encode($data->nume), array('viewOrder', 'id'=>$data->comandaId)); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('clientId')); ?>:</b>
	<?php echo CHtml::encode($data->clientId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nume')); ?>:</b>
	<?php echo CHtml::encode($data->nume); ?>
	<br />

	<!--<b><?php echo CHtml::encode($data->getAttributeLabel('continut')); ?>:</b>
	<?php echo CHtml::encode($data->continut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorieId')); ?>:</b>
	<?php echo CHtml::encode($data->categorieId); ?>
	<br /> 

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raspuns')); ?>:</b>
	<?php echo CHtml::encode($data->raspuns); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ofertaId')); ?>:</b>
	<?php echo CHtml::encode($data->ofertaId); ?>
	<br />

	*/ ?>
 -->
</div>