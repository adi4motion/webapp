<?php
/* @var $this CategorieController */
/* @var $model Categorie */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->categorieId,
);

$this->menu=array(
	array('label'=>'List Categorie', 'url'=>array('index')),
	array('label'=>'Create Categorie', 'url'=>array('create')),
	array('label'=>'Update Categorie', 'url'=>array('update', 'id'=>$model->categorieId)),
	array('label'=>'Delete Categorie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->categorieId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Categorie', 'url'=>array('admin')),
);
?>

<h1>View Categorie #<?php echo $model->categorieId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'categorieId',
		'parentId',
		'nume',
		'descriere',
		'metaTitlu',
		'metaDescriere',
		'titluImg',
		'altImg',
		'img',
		'keywords',
	),
)); ?>
