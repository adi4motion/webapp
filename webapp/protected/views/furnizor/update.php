<?php
/* @var $this FurnizorController */
/* @var $model Furnizor */

$this->breadcrumbs=array(
	'Furnizors'=>array('index'),
	$model->furnizorId=>array('view','id'=>$model->furnizorId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Furnizor', 'url'=>array('index')),
	array('label'=>'Create Furnizor', 'url'=>array('create')),
	array('label'=>'View Furnizor', 'url'=>array('view', 'id'=>$model->furnizorId)),
	array('label'=>'Manage Furnizor', 'url'=>array('admin')),
);
?>

<h1>Update Furnizor <?php echo $model->furnizorId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>