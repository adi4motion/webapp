<?php
/* @var $this FurnizorController */
/* @var $model Furnizor */

$this->breadcrumbs=array(
	'Furnizors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Furnizor', 'url'=>array('index')),
	array('label'=>'Manage Furnizor', 'url'=>array('admin')),
);
?>

<h1>Create Furnizor</h1>

<?php echo $this->renderPartial('_insertForm', array('model'=>$model)); ?>