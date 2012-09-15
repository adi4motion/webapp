<?php
/* @var $this FurnizorCategorieController */
/* @var $model FurnizorCategorie */

$this->breadcrumbs=array(
	'Furnizor Categories'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FurnizorCategorie', 'url'=>array('index')),
	array('label'=>'Create FurnizorCategorie', 'url'=>array('create')),
	array('label'=>'Update FurnizorCategorie', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FurnizorCategorie', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FurnizorCategorie', 'url'=>array('admin')),
);
?>

<h1>View FurnizorCategorie #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'furnizorId',
		'categorieId',
	),
)); ?>
