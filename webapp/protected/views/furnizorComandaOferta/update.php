<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $model FurnizorComandaOferta */

$this->breadcrumbs=array(
	'Furnizor Comanda Ofertas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FurnizorComandaOferta', 'url'=>array('index')),
	array('label'=>'Create FurnizorComandaOferta', 'url'=>array('create')),
	array('label'=>'View FurnizorComandaOferta', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FurnizorComandaOferta', 'url'=>array('admin')),
);
?>

<h1>Update FurnizorComandaOferta <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>