<?php
/* @var $this OfertaController */
/* @var $model Oferta */

$this->breadcrumbs=array(
	'Ofertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Oferta', 'url'=>array('index')),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>Create Oferta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>