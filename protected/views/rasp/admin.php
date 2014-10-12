<?php
/* @var $this RaspController */
/* @var $model Rasp */

$this->breadcrumbs=array(
	'Rasps'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Rasp', 'url'=>array('index')),
	array('label'=>'Create Rasp', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#rasp-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rasps</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rasp-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'Day',
		'Group',
		'Facl',
		'Subj',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
