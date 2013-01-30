<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->user_oid), array('view', 'id'=>$data->user_oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomecompleto')); ?>:</b>
	<?php echo CHtml::encode($data->nomecompleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datanascimento')); ?>:</b>
	<?php echo CHtml::encode($data->datanascimento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('particular')); ?>:</b>
	<?php echo CHtml::encode($data->particular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empresa')); ?>:</b>
	<?php echo CHtml::encode($data->empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contacto')); ?>:</b>
	<?php echo CHtml::encode($data->contacto); ?>
	<br />


</div>