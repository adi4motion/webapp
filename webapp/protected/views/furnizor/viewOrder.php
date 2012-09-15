<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Furnizor'=>array('view&id='.Furnizor::model()->returnFurnizorIdLogat()),
	$model->comandaId,
);
Furnizor::model()->setStatus($model->comandaId, 'comandaId', '1');
$this->menu=array(
	array('label'=>'Orders', 'url'=>array('viewOrders&id='.Furnizor::model()->returnFurnizorIdLogat())),

);
?>

<h1>View Comanda <?php echo $model->comandaId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comandaId',
		//'clientId',
		'nume',
		'continut',
		'categorieId',
		'data',
		'raspuns',
		'ofertaId',
	),
)); ?>
