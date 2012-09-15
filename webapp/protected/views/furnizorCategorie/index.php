<?php
/* @var $this FurnizorCategorieController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Furnizor Categories',
);

$this->menu=array(
	array('label'=>'Create FurnizorCategorie', 'url'=>array('create')),
	array('label'=>'Manage FurnizorCategorie', 'url'=>array('admin')),
);
?>

<h1>Furnizor Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
