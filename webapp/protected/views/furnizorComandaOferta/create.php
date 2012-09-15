<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $model FurnizorComandaOferta */

$this->breadcrumbs=array(
	'Furnizor Comanda Ofertas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FurnizorComandaOferta', 'url'=>array('index')),
	array('label'=>'Manage FurnizorComandaOferta', 'url'=>array('admin')),
);
?>

<h1>Create FurnizorComandaOferta</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>