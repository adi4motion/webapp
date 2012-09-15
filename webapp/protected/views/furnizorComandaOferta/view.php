<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $model FurnizorComandaOferta */

$this->breadcrumbs=array(
	'Furnizor Comanda Ofertas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FurnizorComandaOferta', 'url'=>array('index')),
	array('label'=>'Create FurnizorComandaOferta', 'url'=>array('create')),
	array('label'=>'Update FurnizorComandaOferta', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FurnizorComandaOferta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FurnizorComandaOferta', 'url'=>array('admin')),
);
?>

<h1>View FurnizorComandaOferta #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'furnizorId',
		'comandaId',
		'ofertaId',
		'status_oferta',
		'status_comanda',
	),
)); ?>
