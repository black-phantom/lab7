<?php
/* @var $this RaspController */
/* @var $model Rasp */

$this->breadcrumbs=array(
	'Rasps'=>array('index'),
	$model->Day,
);

$this->menu=array(
	array('label'=>'List Rasp', 'url'=>array('index')),
	array('label'=>'Create Rasp', 'url'=>array('create')),
	array('label'=>'Update Rasp', 'url'=>array('update', 'id'=>$model->Day)),
	array('label'=>'Delete Rasp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Day),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rasp', 'url'=>array('admin')),
);
?>

<h1>View Rasp #<?php echo $model->Day; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Day',
		'Group',
		'Facl',
		'Subj',
	),
)); ?>
