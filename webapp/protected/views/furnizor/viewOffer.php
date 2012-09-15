<?php
/* @var $this OfertaController */
/* @var $model Oferta */

$this->breadcrumbs=array(
	'Ofertas'=>array('index'),
	$model->ofertaId,
);
Furnizor::model()->setStatus($model->ofertaId, 'ofertaId', '1');
$this->menu=array(
	array('label'=>'List Oferta', 'url'=>array('index')),
	array('label'=>'Create Oferta', 'url'=>array('create')),
	array('label'=>'Update Oferta', 'url'=>array('update', 'id'=>$model->ofertaId)),
	array('label'=>'Delete Oferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ofertaId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>View Oferta #<?php echo $model->ofertaId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ofertaId',
		'comandaId',
		//'furnizorId',
		'nume',
		'continut',
		'data',
	),
)); ?>
