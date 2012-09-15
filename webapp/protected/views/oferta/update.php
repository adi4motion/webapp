<?php
/* @var $this OfertaController */
/* @var $model Oferta */

$this->breadcrumbs=array(
	'Ofertas'=>array('index'),
	$model->ofertaId=>array('view','id'=>$model->ofertaId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Oferta', 'url'=>array('index')),
	array('label'=>'Create Oferta', 'url'=>array('create')),
	array('label'=>'View Oferta', 'url'=>array('view', 'id'=>$model->ofertaId)),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>Update Oferta <?php echo $model->ofertaId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>