<?php
/* @var $this RaspController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rasps',
);

$this->menu=array(
	array('label'=>'Create Rasp', 'url'=>array('create')),
	array('label'=>'Manage Rasp', 'url'=>array('admin')),
);
?>

<h1>Rasps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
