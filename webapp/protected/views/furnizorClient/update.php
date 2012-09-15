<?php
/* @var $this FurnizorClientController */
/* @var $model FurnizorClient */

$this->breadcrumbs=array(
	'Furnizor Clients'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FurnizorClient', 'url'=>array('index')),
	array('label'=>'Create FurnizorClient', 'url'=>array('create')),
	array('label'=>'View FurnizorClient', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FurnizorClient', 'url'=>array('admin')),
);
?>

<h1>Update FurnizorClient <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>