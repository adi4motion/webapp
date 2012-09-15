<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Comandas'=>array('index'),
	$model->comandaId,
);

$this->menu=array(
	array('label'=>'List Comanda', 'url'=>array('index')),
	array('label'=>'Create Comanda', 'url'=>array('create')),
	array('label'=>'Update Comanda', 'url'=>array('update', 'id'=>$model->comandaId)),
	array('label'=>'Delete Comanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->comandaId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>View Comanda #<?php echo $model->comandaId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'comandaId',
		'clientId',
		'nume',
		'continut',
		'categorieId',
		'data',
		'raspuns',
		'ofertaId',
	),
)); ?>
