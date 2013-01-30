<?php
/* @var $this OrcamentoController */
/* @var $data Orcamento */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serie')); ?>:</b>
	<?php echo CHtml::encode($data->serie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numserie')); ?>:</b>
	<?php echo CHtml::encode($data->numserie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anexos')); ?>:</b>
	<?php echo CHtml::encode($data->anexos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valortotal')); ?>:</b>
	<?php echo CHtml::encode($data->valortotal); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_oid')); ?>:</b>
	<?php echo CHtml::encode($data->user_oid); ?>
	<br />

	*/ ?>

</div>