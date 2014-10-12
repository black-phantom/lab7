<?php
/* @var $this RaspController */
/* @var $model Rasp */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Group'); ?>
		<?php echo $form->textField($model,'Group',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'Day'); ?>
		<?php echo $form->textField($model,'Day',array('size'=>60,'maxlength'=>255)); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'Subj'); ?>
		<?php echo $form->textField($model,'Subj',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Facl'); ?>
		<?php echo $form->textField($model,'Facl',array('size'=>60,'maxlength'=>255)); ?>
	</div>

		<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->