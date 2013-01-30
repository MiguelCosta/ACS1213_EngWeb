<?php
/* @var $this PromocaoController */
/* @var $data Promocao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datainicial')); ?>:</b>
	<?php echo CHtml::encode($data->datainicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datafinal')); ?>:</b>
	<?php echo CHtml::encode($data->datafinal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_oid')); ?>:</b>
	<?php echo CHtml::encode($data->produto_oid); ?>
	<br />


</div>