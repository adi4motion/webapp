<?php
/* @var $this FurnizorController */
/* @var $model Furnizor */

$this->breadcrumbs=array(
	'Furnizors'=>array('view&id='.Furnizor::model()->returnFurnizorIdLogat()),
	$model->furnizorId,
);


$this->menu=array(
	array('label'=>'Update Furnizor', 'url'=>array('update', 'id'=>$model->furnizorId)),
	array('label'=>'Delete Furnizor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->furnizorId),'confirm'=>'Are you sure you want to delete this item?')),
        array('label'=>'My orders', 'url'=>Yii::app()->request->baseUrl.'?r=furnizor/viewOrders&id='.$model->returnFurnizorIdLogat()),
         array('label'=>'My offers', 'url'=>Yii::app()->request->baseUrl.'?r=furnizor/viewOffers&id='.$model->returnFurnizorIdLogat()),
);
?>

<h1>Wellcome <?php echo $model->nume; ?>!</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'furnizorId',
		'nume',
		'telefon',
		'email',
		'parola',
		'status',
	),
)); ?>
