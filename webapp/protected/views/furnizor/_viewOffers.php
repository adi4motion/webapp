<?php
/* @var $this OfertaController */
/* @var $data Oferta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ofertaId')); ?>:</b>
	<?php echo CHtml::encode($data->ofertaId.' ');if(Furnizor::model()->returnStatusOferte()) { echo '<b>'; echo CHtml::link(CHtml::encode($data->nume), array('viewOffer', 'id'=>$data->ofertaId));echo '</b>'; } else echo CHtml::link(CHtml::encode($data->nume), array('viewOffer', 'id'=>$data->ofertaId)); ?>
	<br />
<!--
	<b><?php echo CHtml::encode($data->getAttributeLabel('comandaId')); ?>:</b>
	<?php echo CHtml::encode($data->comandaId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furnizorId')); ?>:</b>
	<?php echo CHtml::encode($data->furnizorId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('continut')); ?>:</b>
	<?php echo CHtml::encode($data->continut); ?>
	<br /

        <b><?php echo CHtml::encode($data->getAttributeLabel('nume')); ?>:</b>
	<?php echo CHtml::encode($data->nume); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

>-->
</div>