<?php
/* @var $this CategorieController */
/* @var $model Categorie */

$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->categorieId=>array('view','id'=>$model->categorieId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Categorie', 'url'=>array('index')),
	array('label'=>'Create Categorie', 'url'=>array('create')),
	array('label'=>'View Categorie', 'url'=>array('view', 'id'=>$model->categorieId)),
	array('label'=>'Manage Categorie', 'url'=>array('admin')),
);
?>

<h1>Update Categorie <?php echo $model->categorieId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>