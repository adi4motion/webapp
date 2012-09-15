<?php
/* @var $this FurnizorComandaOfertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Furnizor Comanda Ofertas',
);

$this->menu=array(
	array('label'=>'Create FurnizorComandaOferta', 'url'=>array('create')),
	array('label'=>'Manage FurnizorComandaOferta', 'url'=>array('admin')),
);
?>

<h1>Furnizor Comanda Ofertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
