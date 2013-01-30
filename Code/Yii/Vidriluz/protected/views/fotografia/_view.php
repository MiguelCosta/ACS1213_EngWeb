<?php
/* @var $this FotografiaController */
/* @var $data Fotografia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('album_oid')); ?>:</b>
	<?php echo CHtml::encode($data->album_oid); ?>
	<br />


</div>