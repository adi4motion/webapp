<?php
/* @var $this FurnizorCategorieController */
/* @var $model FurnizorCategorie */

$this->breadcrumbs=array(
	'Furnizor Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FurnizorCategorie', 'url'=>array('index')),
	array('label'=>'Create FurnizorCategorie', 'url'=>array('create')),
	array('label'=>'View FurnizorCategorie', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FurnizorCategorie', 'url'=>array('admin')),
);
?>

<h1>Update FurnizorCategorie <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>