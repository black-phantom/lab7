<?php
/* @var $this RaspController */
/* @var $model Rasp */

$this->breadcrumbs=array(
	'Rasps'=>array('index'),
	$model->Day=>array('view','id'=>$model->Day),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rasp', 'url'=>array('index')),
	array('label'=>'Create Rasp', 'url'=>array('create')),
	array('label'=>'View Rasp', 'url'=>array('view', 'id'=>$model->Day)),
	array('label'=>'Manage Rasp', 'url'=>array('admin')),
);
?>

<h1>Update Rasp <?php echo $model->Day; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>