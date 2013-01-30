<?php
/* @var $this OrcamentoLinhaController */
/* @var $data OrcamentoLinha */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('oid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->oid), array('view', 'id'=>$data->oid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor')); ?>:</b>
	<?php echo CHtml::encode($data->valor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orcamento_oid')); ?>:</b>
	<?php echo CHtml::encode($data->orcamento_oid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('produto_oid')); ?>:</b>
	<?php echo CHtml::encode($data->produto_oid); ?>
	<br />


</div>