<?php
/* @var $this FurnizorCategorieController */
/* @var $model FurnizorCategorie */

$this->breadcrumbs=array(
	'Furnizor Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FurnizorCategorie', 'url'=>array('index')),
	array('label'=>'Manage FurnizorCategorie', 'url'=>array('admin')),
);
?>

<h1>Create FurnizorCategorie</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>