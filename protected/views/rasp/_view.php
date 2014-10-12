<?php
/* @var $this RaspController */
/* @var $data Rasp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Group')); ?>:</b>
	<?php echo CHtml::encode($data->Group); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('Day')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Day), array('view', 'id'=>$data->Day)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Subj')); ?>:</b>
	<?php echo CHtml::encode($data->Subj); ?>
	<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Facl')); ?>:</b>
	<?php echo CHtml::encode($data->Facl); ?>
	<br />

	
</div>