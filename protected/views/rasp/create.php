<?php
/* @var $this RaspController */
/* @var $model Rasp */

$this->breadcrumbs=array(
	'Rasps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rasp', 'url'=>array('index')),
	array('label'=>'Manage Rasp', 'url'=>array('admin')),
);
?>

<h1>Create Rasp</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>