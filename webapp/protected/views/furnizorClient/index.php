<?php
/* @var $this FurnizorClientController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Furnizor Clients',
);

$this->menu=array(
	array('label'=>'Create FurnizorClient', 'url'=>array('create')),
	array('label'=>'Manage FurnizorClient', 'url'=>array('admin')),
);
?>

<h1>Furnizor Clients</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
