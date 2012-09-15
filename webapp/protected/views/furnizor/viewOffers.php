<?php
/* @var $this OfertaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ofertas',
);

$this->menu=array(
	array('label'=>'Create Oferta', 'url'=>array('create')),
	array('label'=>'Manage Oferta', 'url'=>array('admin')),
);
?>

<h1>Ofertas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewOffers',
)); ?>
