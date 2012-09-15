<?php
/* @var $this FurnizorCategorieController */
/* @var $data FurnizorCategorie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('furnizorId')); ?>:</b>
	<?php echo CHtml::encode($data->furnizorId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorieId')); ?>:</b>
	<?php echo CHtml::encode($data->categorieId); ?>
	<br />


</div>