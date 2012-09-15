<?php
/* @var $this CategorieController */
/* @var $data Categorie */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('categorieId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->categorieId), array('view', 'id'=>$data->categorieId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parentId')); ?>:</b>
	<?php echo CHtml::encode($data->parentId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nume')); ?>:</b>
	<?php echo CHtml::encode($data->nume); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descriere')); ?>:</b>
	<?php echo CHtml::encode($data->descriere); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metaTitlu')); ?>:</b>
	<?php echo CHtml::encode($data->metaTitlu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metaDescriere')); ?>:</b>
	<?php echo CHtml::encode($data->metaDescriere); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('titluImg')); ?>:</b>
	<?php echo CHtml::encode($data->titluImg); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('altImg')); ?>:</b>
	<?php echo CHtml::encode($data->altImg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('img')); ?>:</b>
	<?php echo CHtml::encode($data->img); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	*/ ?>

</div>