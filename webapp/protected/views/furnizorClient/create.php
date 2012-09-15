<?php
/* @var $this FurnizorClientController */
/* @var $model FurnizorClient */

$this->breadcrumbs=array(
	'Furnizor Clients'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FurnizorClient', 'url'=>array('index')),
	array('label'=>'Manage FurnizorClient', 'url'=>array('admin')),
);
?>

<h1>Create FurnizorClient</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>