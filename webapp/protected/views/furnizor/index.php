<?php
/* @var $this FurnizorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Furnizors',
);

$this->menu=array(
	array('label'=>'Create Furnizor', 'url'=>array('create')),
	array('label'=>'Manage Furnizor', 'url'=>array('admin')),
);
?>

<h1>Furnizors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
