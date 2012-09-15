<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $data FurnizorComandaOferta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furnizorId')); ?>:</b>
	<?php echo CHtml::encode($data->furnizorId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comandaId')); ?>:</b>
	<?php echo CHtml::encode($data->comandaId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ofertaId')); ?>:</b>
	<?php echo CHtml::encode($data->ofertaId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_oferta')); ?>:</b>
	<?php echo CHtml::encode($data->status_oferta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_comanda')); ?>:</b>
	<?php echo CHtml::encode($data->status_comanda); ?>
	<br />


</div>