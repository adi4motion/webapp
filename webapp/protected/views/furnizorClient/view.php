<?php
/* @var $this FurnizorClientController */
/* @var $model FurnizorClient */

$this->breadcrumbs=array(
	'Furnizor Clients'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FurnizorClient', 'url'=>array('index')),
	array('label'=>'Create FurnizorClient', 'url'=>array('create')),
	array('label'=>'Update FurnizorClient', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FurnizorClient', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FurnizorClient', 'url'=>array('admin')),
);
?>

<h1>View FurnizorClient #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'parola',
		'tip',
	),
)); ?>
