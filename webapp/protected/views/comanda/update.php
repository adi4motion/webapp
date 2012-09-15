<?php
/* @var $this ComandaController */
/* @var $model Comanda */

$this->breadcrumbs=array(
	'Comandas'=>array('index'),
	$model->comandaId=>array('view','id'=>$model->comandaId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Comanda', 'url'=>array('index')),
	array('label'=>'Create Comanda', 'url'=>array('create')),
	array('label'=>'View Comanda', 'url'=>array('view', 'id'=>$model->comandaId)),
	array('label'=>'Manage Comanda', 'url'=>array('admin')),
);
?>

<h1>Update Comanda <?php echo $model->comandaId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>